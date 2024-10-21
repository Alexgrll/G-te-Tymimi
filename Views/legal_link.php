<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body class="legal-link"> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>
        <section id="section-intro-legal-link" class="section">
            <div id="image-container-legal-link" class="container">
                <img src="/public/assets/images/stairs.jpeg" alt="Photo de l'ecalier qui mène au premier étage.">               
                <div class="container-title">
                    <h1>Les Mentions Légales</h1>
                </div>
            </div>
        </section>

        <section id="section-legal-link" class="section">
            <div id="legal-container" class="container">
                <h2>Mentions Légales</h2>
                
                <div class="feature-item">
                    <div class="features">
                        <div class="legal-info">
                            <h3>Propriétaire :</h3>
                            <p>
                                Annick Vigouroux<br>
                                359 Rte de Pen ar Pont,<br>
                                29470 Plougastel-Daoulas<br>
                                <a href="mailto:a.vigouroux29@orange.fr"> a.vigouroux29@orange.fr</a><br>
                                Tél : <a href="tel:+33298406987">+33 2 98 40 69 87</a>
                            </p>
                        </div>
                        
                        <div class="legal-info">
                            <h3>Création graphique :</h3>
                            <p>ZE-Company</p>
                        </div>

                        <div class="legal-info">
                            <h3>Responsable publication :</h3>
                            <p>Annick Vigouroux</p>
                        </div>

                        <div class="legal-info">
                            <h3>Hébergeur :</h3>
                            <p>OVH – 2 rue Kellermann 59100 Roubaix</p>
                        </div>
                        
                    </div>
                    
                    <div class="features">
                        <div class="legal-info">
                            <h3>Donnée personnelles :</h3>
                            <p>
                                Le site assure une collecte et un traitement des informations personnelles dans le respect de la 
                                vie privée, tel que prévu par la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers 
                                et aux libertés et par le Règlement européen sur la Protection des Données du 14 avril 2016.
                            </p>
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