<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body class="booking"> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>
        <section id="section-intro-booking" class="section">
            <div id="image-container-booking" class="container">
                <img src="/public/assets/images/livingroom_view_three.jpeg" alt="Photo du séjour.">               
                <div class="container-title">
                    <h1>Réservation</h1>
                </div>
            </div>
        </section>

        <section id="section-booking" class="section">
            <div id="container-tarifs-reservation" class="container">
                <div id="features-booking" class="features">
                    <h2>Tarifs & Réservation</h2>
                    <div id="reservation-section">
                        <div id="calendar-section">
                            <input type="text" id="date-picker" placeholder="Sélectionnez vos dates" readonly>
                            <div class="legend">
                                <div class="container-legend">
                                    <div id="square-grey" class="square"></div>
                                    <p>Jour déjà passé</p>
                                </div>

                                <div class="container-legend">
                                    <div id="square-red" class="square"></div>
                                    <p>Jour non disponible</p>
                                </div>
                            </div>
                        </div>

                        <div id="reservation-summary">
                            <div class="container-reservation-summary">
                                <h3>Récapitulatif de votre réservation</h3>
                                <p>Dates sélectionnées : <span id="selected-dates"></span></p>
                                <p>Durée du séjour : <span id="stay-duration"></span></p>
                            </div>

                            <div class="container-reservation-summary">
                                <h3>Détails du tarif :</h3>
                                <p>Tarif par nuit : <span id="nightly-rate"></span></p>
                                <p>Sous-total : <span id="subtotal"></span></p>
                            </div>

                            <div class="container-reservation-summary">
                                <h3>Frais supplémentaires :</h3>
                                <p> 
                                    <input type="checkbox" id="cleaning-fee-toggle" checked>
                                    <label for="cleaning-fee-toggle">Inclure les frais de ménage (20.00 €)</label>
                                </p>
                            </div>

                            <div class="container-reservation-summary">
                                <p><strong>Total à payer : <span id="total"></span></strong></p>
                            </div>

                            <div class="container-reservation-summary">
                                <h3>Conditions de paiement :</h3>
                                <p>Caution : <span id="deposit">300 € à régler avant l’arrivée par virement ou donnée à l’arrivée en espèces</span></p>
                            </div>

                            <div class="container-reservation-summary">
                                <h3>Informations importantes :</h3>
                                <p>Heure d'arrivée : <span id="arrival-time">Au plutôt à 15h</span></p>
                                <p>Heure de départ : <span id="departure-time">Avant 10h</span></p>
                            </div>

                            <input id="confirm-reservation" type="submit" value="Confirmer la réservation">
                        </div>

                        <div id="form-reservation-summary">
                            <h3>Formulaire de réservation :</h3>
                            <form id="reservation-form" action="" method="POST">
                                <div class="feature-form">
                                    <label for="nom">Nom :</label>
                                    <input type="text" id="nom" name="nom" placeholder="Votre nom*" autocomplete="off">
                                </div>

                                <div class="feature-form">
                                    <label for="prenom">Prénom :</label>
                                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom*" autocomplete="off">
                                </div>

                                <div class="feature-form">
                                    <label for="email">Email :</label>
                                    <input type="email" id="email" name="email" placeholder="Votre email*" autocomplete="off">
                                </div>

                                <div class="feature-form">
                                    <label for="tel">Téléphone (optionnel) :</label>
                                    <input type="tel" id="telephone" name="telephone" placeholder="Votre numéro de téléphone (optionnel)" autocomplete="off">
                                </div>

                                <div class="feature-form">
                                    <p>*Champs obligatoire</p>
                                </div>

                                <div id="buttons-reservation" class="feature-form">
                                    <input type="button" id="back-to-summary" value="Revenir au récapitulatif">
                                    <input type="submit" id="payment" value="Accéder au paiement">
                                </div>
                            </form>
                        </div>
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