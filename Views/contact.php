<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body class="contact"> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>

        <section id="section-intro-contact" class="section">
            <div id="image-container-contact" class="container">
                <img src="/public/assets/images/entrance.jpeg" alt="Photo de l'entrée du gîte.">               
                <div class="container-title">
                    <h1>Contact</h1>
                </div>
            </div>
        </section>

        <section id="section-contact" class="section">
            <div id="container-contact" class="container">
                <div id="features-contact" class="features">
                    <h2>Nous Contacter</h2>
                    <p>
                        Nous sommes ravis de répondre à toutes vos questions et de vous aider dans l’organisation de votre séjour à 
                        Plougastel-Daoulas. Veuillez remplir le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.
                    </p>

                    <address>
                        <div id="phone-contact" class="container-info">
                            <div id="phone-icon" class="container-icon">
                                <img src="/public/assets/icons/icon_phone_black.png" alt="Icône téléphone.">
                            </div>
                            <p>+33 2 98 40 69 87</p>
                        </div>

                        <div id="maps-contact" class="container-info">
                            <div id="maps-icon" class="container-icon">
                                <img src="/public/assets/icons/icon_map_black.png" alt="Icône de localisation.">
                            </div>
                            <p>Chemin du Traon Ker Illien Serpil,<br>29470 Plougastel-Daoulas</p>
                        </div>
                    </address>
                </div>

                <div id="features-form-contact" class="features">
                    <form id="contact-form" action="" method="POST">
                        <div class="feature-form">
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" placeholder="Votre nom*" autocomplete="off">
                            <div id="nom-error"></div>
                        </div>

                        <div class="feature-form">
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom*" autocomplete="off">
                            <div id="prenom-error"></div>
                        </div>

                        <div class="feature-form">
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" placeholder="Votre email*" autocomplete="off">
                            <div id="email-error"></div>
                        </div>

                        <div class="feature-form">
                            <label for="telephone">Téléphone (optionnel) :</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="Votre numéro de téléphone (optionnel)" autocomplete="off">
                            <div id="telephone-error"></div>
                        </div>

                        <div class="feature-form">
                            <label for="sujet">Sujet :</label>
                            <input type="text" id="sujet" name="sujet" placeholder="Sujet de votre message" autocomplete="off">
                        </div>

                        <div class="feature-form">
                            <label for="message">Message :</label>
                            <textarea type="text" id="message" name="message" placeholder="Saisissez votre message...*" autocomplete="off"></textarea>
                            <div id="message-error"></div>
                        </div>
                        
                        <div class="feature-form">
                            <p>*Champs obligatoire</p>
                        </div>

                        <div id="input-consent" class="feature-form">
                            <input type="checkbox" name="consent" id="consent">
                            <label for="consent">
                                En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la relation 
                                commerciale qui peut en découdre.
                            </label>
                        </div>
                        <div id="consent-error"></div>

                        <div class="feature-form">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="section-map" class="section">
            <div id="container-map" class="container">       
                <div class="map-embed">
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Chemin%20du%20Traon%20Ker%20Illien%20Serpil,%2029470%20Plougastel-Daoulas+(G%C3%AEte%20Tymimi)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        <a href="https://www.gps.ie/">gps devices</a>
                    </iframe>
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