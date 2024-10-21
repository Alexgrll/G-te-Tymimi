<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>

        <section id="section-intro" class="section">
            <div id="image-container" class="container">
                <img src="/public/assets/images/<?php echo $imageHeaderHome->nom_image;?>" alt="Photo du paysage de plougastel.">
            </div>
        </section>

        <section id="section-description" class="section">
            <div id="description-container" class="container">
                <div id="description-header" class="features">
                    <h3><?php echo $subtitleHome->sous_titre_texte;?></h3>
                    <h2><?php echo $titleHome->titre_texte;?></h2>
                    <p><?php echo $descriptionHome->description_texte;?></p>
                </div>

                <div id="description-second" class="features">
                    <div class="feature-item">
                        <div class="feature-header">
                            <div class="line-container horizontal">
                                <div id="first-line" class="line"></div>
                            </div>

                            <h3 class="feature-title"><?php echo $titleImage1->titre_texte;?></h3>
                        </div>

                        <div class="feature-image-description">
                            <img src="/public/assets/images/<?php echo $image1->nom_image;?>" alt="Photo d'une chambre contenant deux lits simples." class="feature-image">                    
                        </div>
                    </div>
                </div>

            </div>

            <div id="feature-container" class="container">
                <div id="description-third" class="features">
                    <div class="feature-item">
                        <div class="feature-header">
                            <div class="line-container horizontal">
                                <div id="second-line" class="line"></div>
                            </div>

                            <h3 class="feature-title"><?php echo $titleImage2->titre_texte;?></h3>
                        </div>

                        <div class="feature-image-description">
                            <img src="/public/assets/images/<?php echo $image2->nom_image;?>" alt="Photo du mobilier dans une chambre." class="feature-image">
                        </div>    
                    </div>
                </div>

                <div id="description-fourth" class="features">
                    <div class="feature-item">
                        <div class="feature-header">
                            <div class="line-container horizontal">
                                <div id="third-line" class="line"></div>
                            </div>

                            <h3 class="feature-title"><?php echo $titleImage3->titre_texte;?></h3>
                        </div>

                        <div class="feature-image-description">
                            <img src="/public/assets/images/<?php echo $image3->nom_image;?>" alt="Photo du bord de mer." class="feature-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-room-image" class="section">
            <div id="container-room-image" class="container">
                <img src="/public/assets/images/<?php echo $imageTestimonial->nom_image;?>" alt="Photo d'une chambre contenant un lit double.">
            </div>

            <div class="testimonial-slider">
                <div class="testimonial-slide">
                    <p class="testimonial-text">"Super séjour ! Le gîte était propre, bien équipé, et le cadre magnifique."</p>
                    <p class="testimonial-author">- Alice Dupont -</p>
                </div>

                <div class="testimonial-slide">
                    <p class="testimonial-text">"Nous avons passé des vacances inoubliables, les activités locales sont à découvrir."</p>
                    <p class="testimonial-author">- Marc Lemoine -</p>
                </div>

                <div class="testimonial-slide">
                    <p class="testimonial-text">"Accueil chaleureux et gîte confortable. Je recommande vivement !"</p>
                    <p class="testimonial-author">- Julie Martin -</p>
                </div>
            </div>
        </section>

        <section id="section-reservation" class="section">
            <div id="booking-container" class="container">
                <img src="/public/assets/images/<?php echo $imageBooking->nom_image;?>" alt="Photo de l'entrée du gîte.">

                <div class="booking-content">
                    <div class="booking-wrapper">
                        <div class="booking-header">
                            <div class="line-container horizontal">
                                <div id="fourth-line" class="line"></div>
                            </div>

                            <h3>Gîte Tymimi</h3>
                        </div>

                        <h2>Tarifs & Réservation</h2>
                    </div>

                    <div id="booking-button" class="button">
                        <a href="/Views/booking.php" role="button" aria-label="découvrir nos tarifs et disponibilités">
                            découvrir nos tarifs<br>et disponibilités
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/footer.php")

    ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
    <script src="/public/scripts/script.js"></script>

</body>
</html>