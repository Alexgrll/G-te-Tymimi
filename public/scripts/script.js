let currentCarousel = null;
let currentIndex = 0;
let calendar;
let reservedDates = [];
let showMonths = window.innerWidth < 578 ? 1 : 2; // Détermine le nombre de mois à afficher en fonction de la largeur de l'écran (1 pour les petits écrans, 2 pour les plus grands)
let currentTestimonial = 0;
const seasonalRates = {
    low: 70,    // Basse saison
    mid: 90,    // Moyenne saison
    high: 120   // Haute saison
};
const seasons = [
    { start: { month: 10, day: 1 }, end: { month: 1, day: 28 }, rate: "low" },   // Basse saison (1er Nov - 28 Février)
    { start: { month: 2, day: 1 }, end: { month: 4, day: 31 }, rate: "mid" },    // Moyenne saison (1er Mars - 31 Mai)
    { start: { month: 5, day: 1 }, end: { month: 7, day: 31 }, rate: "high" },   // Haute saison (1er Juin - 31 Août)
    { start: { month: 8, day: 1 }, end: { month: 9, day: 31 }, rate: "mid" }     // Moyenne saison (1er Septembre - 31 Octobre)
];
const cleaningFee = 20.00;
const slides = document.querySelectorAll('.testimonial-slide');

document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.carousel');
    const secondLink = document.querySelector("#desktop-navigation li:nth-child(2)");
    const logo = document.querySelector("#logo");
    const form = document.getElementById('contact-form');

    // Gestion du carousel
    if (carousels.length > 0) {
        carousels.forEach((carousel) => {
            const items = carousel.querySelectorAll('.carousel-item');
            const dots = carousel.querySelectorAll('.dot');
            const prevButton = carousel.querySelector('.carousel-control.prev');
            const nextButton = carousel.querySelector('.carousel-control.next');
            let currentIndex = 0;

            updateCarousel(carousel, currentIndex);

            if (nextButton) {
                nextButton.addEventListener('click', () => {
                    currentIndex = nextSlide(carousel, currentIndex, items.length);
                });
            }

            if (prevButton) {
                prevButton.addEventListener('click', () => {
                    currentIndex = prevSlide(carousel, currentIndex, items.length);
                });
            }

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel(carousel, currentIndex);
                });
            });
        });
    }

    // Gestion du carousel au zoom
    carousels.forEach((carousel) => {
        const itemsImage = carousel.querySelectorAll('.carousel-item img');
        itemsImage.forEach((img, imgIndex) => {
            img.addEventListener('click', () => {
                currentCarousel = carousel.id;
                currentIndex = imgIndex;
                openModal(img.src);
            });
        });
    });

    // Gestion du logo dans le menu
    if (secondLink && logo) {
        secondLink.parentNode.insertBefore(logo, secondLink.nextSibling);
    }

    // Gestion de la localisation dans le footer vers la maps
    if (window.location.hash === "#container-map") {
        const mapContainer = document.querySelector('#container-map');
        if (mapContainer) {
            mapContainer.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }

    // Gestion du calendrier de Flatpickr
    const calendarElement = document.getElementById("date-picker");
    if (calendarElement) {
        calendar = flatpickr(calendarElement, {
            mode: "range",
            locale: "fr", 
            dateFormat: "d/m/Y",
            disable: reservedDates,
            showMonths: showMonths,
            inline: true,
            onDayCreate: function(dObj, dStr, fp, dayElem) {
                const today = new Date().setHours(0, 0, 0, 0);

                if (dayElem.dateObj < today) {
                    dayElem.classList.add('past-date');
                }

                const dateString = dayElem.dateObj.toLocaleDateString('fr-FR');
                if (reservedDates.includes(dateString)) {
                    dayElem.classList.add('booked-date');
                }
            },
            onChange: function(selectedDates) {
                if (selectedDates.length === 2) {
                    const startDate = selectedDates[0];
                    const endDate = selectedDates[1];

                    if (startDate.getTime() === endDate.getTime()) {
                        alert("Vous ne pouvez pas sélectionner la même date pour l'arrivée et le départ.");
                        calendar.clear();
                        document.getElementById("reservation-summary").style.display = "none";
                        return;
                    }

                    updateSummary();

                    const recapSection = document.getElementById("reservation-summary");
                    document.getElementById("form-reservation-summary").style.display = "none"; 

                    if (recapSection) {
                        recapSection.style.display = "block";
                    }
                }
            }
        });

        const cleaningFeeToggle = document.getElementById("cleaning-fee-toggle");
        if (cleaningFeeToggle) {
            cleaningFeeToggle.addEventListener("change", updateSummary);
        }
        const confirmReservationButton = document.getElementById("confirm-reservation");
        if (confirmReservationButton) {
            confirmReservationButton.addEventListener("click", confirmReservation);
        }
        const backToSummaryButton = document.getElementById("back-to-summary");
        if (backToSummaryButton) {
            backToSummaryButton.addEventListener("click", returnToSummary);
        }
        const paymentButton = document.getElementById("payment");
    if (paymentButton) {
        paymentButton.addEventListener("click", function(event) {
            event.preventDefault();
            let form = document.querySelector("#reservation-form");

            blockReservedDates();

            const infos = {
                nom: form[0].value,
                prenom: form[1].value,
                email: form[2].value,
                telephone: form[3].value,
                date: reservedDates,
                nb_nuits: calendar.nights,
                tarif_nuit: calendar.tarif,
                sous_total: calendar.subtotal,
                frais: cleaningFeeToggle.checked,
                total: calendar.total
            };
            data(infos);
            resetReservationForm();
            alert("Les dates ont été réservées. Vous pouvez procéder au paiement.");
        });
    }
    }

    // Gestion du menu pour le mobile
    const menuIcon = document.getElementById("menu-icon");
    if (menuIcon) {
        menuIcon.addEventListener("click", function() {
            const menu = document.querySelector("#mobile-navigation ul");

            if (menu) {
                menu.classList.toggle("show");
                if (menu.classList.contains("show")) {
                    menuIcon.innerHTML = "&#10005;";
                } else {
                    menuIcon.innerHTML = "&#9776;";
                }
            }
        });
    }

    // Gestion du diapo des avis
    if (slides.length > 0) {
        setInterval(nextTestimonial, 5000);
        showTestimonial(currentTestimonial);
    }

    // Gestion pour la validation du formulaire de contact
    if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            let isValid = true;
            let formData = new FormData();

            document.querySelectorAll('#nom-error, #prenom-error, #email-error, #telephone-error, #message-error, #consent-error')
                .forEach(function(el) {
                    el.textContent = '';
            });

            const nom = document.getElementById('nom').value.trim();
            if (nom === '') {
                document.getElementById('nom-error').textContent = "Le nom est requis.";
                isValid = false;
            } else {
                formData.append('nom', nom);
            }

            const prenom = document.getElementById('prenom').value.trim();
            if (prenom === '') {
                document.getElementById('prenom-error').textContent = "Le prénom est requis.";
                isValid = false;
            } else {
                formData.append('prenom', prenom);
            }

            const email = document.getElementById('email').value.trim();
            if (email === '') {
                document.getElementById('email-error').textContent = "L'email est requis.";
                isValid = false;
            } else if (!validateEmail(email)) {
                document.getElementById('email-error').textContent = "L'email est invalide.";
                isValid = false;
            } else {
                formData.append('email', email);
            }

            const telephone = document.getElementById('telephone').value.trim();
            if (telephone !== '') {
                formData.append('telephone', telephone);
            }

            const sujet = document.getElementById('sujet').value.trim();
            if (sujet !== '') {
                formData.append('sujet', sujet);
            }

            const message = document.getElementById('message').value.trim();
            if (message === '') {
                document.getElementById('message-error').textContent = "Le message est requis.";
                isValid = false;
            } else {
                formData.append('message', message);
            }

            const consent = document.getElementById('consent').checked;
            if (!consent) {
                document.getElementById('consent-error').textContent = "Vous devez accepter les termes.";
                isValid = false;
            } else {
                formData.append('consent', consent ? 'yes' : 'no');
            }

            if (isValid) {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'function.php', true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            try {
                                let response = JSON.parse(xhr.responseText);
                                if (response.success) {
                                    alert('Votre message a bien été envoyé !');
                                    form.reset();
                                } else {
                                    if (response.errors) {
                                        for (let field in response.errors) {
                                            document.getElementById(field + '-error').textContent = response.errors[field];
                                        }
                                    }
                                }
                            } catch (e) {
                                alert("Une erreur est survenue. Merci de réessayer plus tard.");
                            }
                        }
                    }
                };
                xhr.send(formData);
            }
        });
    }
});

// Fonction pour mettre à jour le carrousel
function updateCarousel(carousel, currentIndex) {
    const items = carousel.querySelectorAll('.carousel-item');
    const dots = carousel.querySelectorAll('.dot');
    const width = items[0].clientWidth;
    const inner = carousel.querySelector('.carousel-inner');
    inner.style.transform = `translateX(${-currentIndex * width}px)`;

    dots.forEach((dot, index) => {
        dot.classList.remove('active');
        dot.parentElement.classList.remove('border-dot');
        if (index === currentIndex) {
            dot.classList.add('active');
            dot.parentElement.classList.add('border-dot');
        }
    });
}
// Fonction pour passer au slide suivant
function nextSlide(carousel, currentIndex, itemsLength) {
    if (currentIndex < itemsLength - 1) {
        currentIndex++;
    } else {
        currentIndex = 0;
    }
    updateCarousel(carousel, currentIndex);
    return currentIndex;
}
// Fonction pour revenir au slide précédent
function prevSlide(carousel, currentIndex, itemsLength) {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = itemsLength - 1;
    }
    updateCarousel(carousel, currentIndex);
    return currentIndex;
}
// Fonction pour ouvrir la modal et afficher l'image sélectionnée
function openModal(src) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImg');
    modal.style.display = 'flex';
    modalImg.src = src;
}
// Fonction pour fermer la modal
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
}
// Fonction pour passer à l'image suivante dans le carousel
function nextImage() {
    const itemsImage = document.querySelectorAll(`#${currentCarousel} .carousel-item img`);
    currentIndex = (currentIndex + 1) % itemsImage.length;
    document.getElementById('modalImg').src = itemsImage[currentIndex].src;
}
// Fonction pour revenir à l'image précédente dans le carousel
function prevImage() {
    const itemsImage = document.querySelectorAll(`#${currentCarousel} .carousel-item img`);
    currentIndex = (currentIndex - 1 + itemsImage.length) % itemsImage.length;
    document.getElementById('modalImg').src = itemsImage[currentIndex].src;
}
function resetTime(date) {
    return new Date(date.getFullYear(), date.getMonth(), date.getDate());
}
// Fonction pour déterminer le tarif de la nuitée selon la date
function getSeasonalRate(date) {
    const normalizedDate = resetTime(date);
    const year = normalizedDate.getFullYear();

    for (const season of seasons) {
        let start = new Date(year, season.start.month, season.start.day);
        let end = new Date(year, season.end.month, season.end.day);

        if (season.start.month > season.end.month) {
            if (normalizedDate >= start) {
                return seasonalRates[season.rate];
            } else {
                start = new Date(year - 1, season.start.month, season.start.day);
                if (normalizedDate <= end) {
                    return seasonalRates[season.rate];
                }
            }
        } else {
            if (normalizedDate >= start && normalizedDate <= end) {
                return seasonalRates[season.rate];
            }
        }
    }
    return seasonalRates.mid;
}
// Fonction pour calculer le nombre de nuits entre deux dates
function calculateNights(startDate, endDate) {
    const oneDay = 24 * 60 * 60 * 1000;
    const diffDays = Math.round((endDate - startDate) / oneDay);
    return diffDays;
}
// Fonction pour formater la date en français
function formatDateToFrench(date) {
    return date.toLocaleDateString('fr-FR', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}
// Fonction pour mettre à jour le récapitulatif et recalculer le total
function updateSummary() {
    const startDate = calendar.selectedDates[0];
    const endDate = calendar.selectedDates[1];

    if (startDate && endDate) {
        let totalPrice = 0;
        let currentDate = new Date(startDate);

        while (currentDate < endDate) {
            totalPrice += getSeasonalRate(currentDate); 
            currentDate.setDate(currentDate.getDate() + 1); 
        }

        const nights = calculateNights(startDate, endDate);
        const cleaningFeeToggle = document.getElementById("cleaning-fee-toggle").checked;

        const total = cleaningFeeToggle 
            ? (totalPrice + cleaningFee).toFixed(2) 
            : totalPrice.toFixed(2);

        calendar.nights = nights;
        calendar.tarif = getSeasonalRate(startDate).toFixed(2);
        calendar.subtotal = totalPrice.toFixed(2);
        calendar.total = total;

        document.getElementById("selected-dates").innerText = `Du ${startDate.toLocaleDateString()} au ${endDate.toLocaleDateString()}`;
        document.getElementById("stay-duration").innerText = `${nights} nuits`;
        document.getElementById("nightly-rate").innerText = `${getSeasonalRate(startDate).toFixed(2)} €`;
        document.getElementById("subtotal").innerText = `${totalPrice.toFixed(2)} €`;
        document.getElementById("total").innerText = `${total} €`;
    }
}
// Fonction pour confirmer la réservation et afficher le formulaire
function confirmReservation() {
    const startDate = calendar.selectedDates[0];
    const endDate = calendar.selectedDates[1];

    if (startDate && endDate) {
        for (let d = new Date(startDate); d <= endDate; d.setDate(d.getDate() + 1)) {
            reservedDates.push(d.toLocaleDateString('fr-FR'));
        }
    }

    document.getElementById("reservation-summary").style.display = "none";
    document.getElementById("form-reservation-summary").style.display = "block";
    document.getElementById("form-reservation-summary").scrollIntoView({ behavior: "smooth" });
}
// Fonction pour bloquer les dates réservées
function blockReservedDates() {

    calendar.set('disable', reservedDates);
}
// Fonction pour réinitialiser et masquer les sections de réservation
function resetReservationForm() {

    document.getElementById("selected-dates").innerText = "";
    document.getElementById("stay-duration").innerText = "";
    document.getElementById("nightly-rate").innerText = "";
    document.getElementById("subtotal").innerText = "";
    document.getElementById("total").innerText = "";

    const formFields = document.querySelectorAll("#form-reservation-summary input[type='text'], #form-reservation-summary input[type='email'], #form-reservation-summary input[type='tel']");
    formFields.forEach(field => {
        field.value = "";
    });

    document.getElementById("reservation-summary").style.display = "none";
    document.getElementById("form-reservation-summary").style.display = "none";
}
// Fonction pour revenir au récapitulatif
function returnToSummary() {
    document.getElementById("form-reservation-summary").style.display = "none";
    document.getElementById("reservation-summary").style.display = "block";
    document.getElementById("reservation-summary").scrollIntoView({ behavior: "smooth" });
}
// Fonction pour afficher un avis spécifique
function showTestimonial(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
            slide.classList.add('active');
        }
    });
}
// Fonction pour passer l'avis suivant
function nextTestimonial() {
    currentTestimonial = (currentTestimonial + 1) % slides.length;
    showTestimonial(currentTestimonial);
}
// Fonction email validation
function validateEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}

async function data(infos) {
    try {
        const response = await fetch("/booking/booking", {
            method: "POST",
            headers: {"Content-type": "application/json"},
            body: JSON.stringify(infos),
        });

        if (response.ok) {
            console.log("ok");
        }
    } catch (error) {}
}