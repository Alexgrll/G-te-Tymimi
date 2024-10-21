<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body class="tourism"> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>
        <section id="section-intro-tourism" class="section">
            <div id="image-container-tourism" class="container">
                <img src="/public/assets/images/<?php echo $imageHeaderTourism->nom_image;?>" alt="Photo du bord de mer.">
                
                <div class="container-title">
                    <h1>Votre Séjour au Coeur du&nbsp;finistère</h1>
                </div>
            </div>
        </section>

        <section id="section-destination" class="section">
            <div id="container-destination" class="container">
                <div id="features-destination" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="twelfth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection1->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection1->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection1->description_texte;?></p>
                </div>

                <div id="image-destination" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection1->nom_image;?>" alt="Photo du village de Plougastel.">
                </div>
            </div>
        </section>

        <section id="section-nature" class="section">
            <div id="container-nature" class="container">
                <div id="image-nature" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection2->nom_image;?>" alt="Photo de l'étang du Caro.">
                </div>

                <div id="features-nature" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="trirteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection2->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection2->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection2->description_texte;?></p>
                </div>
            </div>
        </section>

        <section id="section-proximity" class="section">
            <div id="container-proximity" class="container">
                <div id="features-proximity" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="fourteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection3->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection3->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection3->description_texte;?></p>
                </div>

                <div id="image-proximity" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection3->nom_image;?>" alt="Photo d'un étal du marché.">
                </div>
            </div>
        </section>

        <section id="section-festivities" class="section">
            <div id="container-festivities" class="container">
                <div id="image-festivities" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection4->nom_image;?>" alt="Photo de bateaux durant la Fête Maritime Internationale de Brest.">
                </div>

                <div id="features-festivities" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="fifteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection4->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection4->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection4->description_texte;?></p>
                </div>
            </div>
        </section>

        <section id="section-outdoor" class="section">
            <div id="container-outdoor" class="container">
                <div id="features-outdoor" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="sixteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection5->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection5->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection5->description_texte;?></p>
                </div>

                <div id="image-outdoor" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection5->nom_image;?>" alt="Photo des activitées aquatiques.">
                </div>
            </div>
        </section>

        <section id="section-maritime-heritage" class="section">
            <div id="container-maritime-heritage" class="container">
                <div id="image-maritime-heritage" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection6->nom_image;?>" alt="Photo de la Pointe du Raz.">
                </div>

                <div id="features-maritime-heritage" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="seventeenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection6->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection6->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection6->description_texte;?></p>
                </div>
            </div>
        </section>

        <section id="section-heritage-culture" class="section">
            <div id="container-heritage-culture" class="container">
                <div id="features-heritage-culture" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="eighteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection7->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection7->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection7->description_texte;?></p>
                </div>

                <div id="image-heritage-culture" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection7->nom_image;?>" alt="Photo de la ville de Concarneau.">
                </div>
            </div>            
        </section>

        <section id="section-breton-ambiance" class="section">
            <div id="container-breton-ambiance" class="container">
                <div id="image-breton-ambiance" class="features">
                    <img src="/public/assets/images/<?php echo $imageTourismSection8->nom_image;?>" alt="Photo du festival 'Les Jeudis du Ports' à Brest.">
                </div>

                <div id="features-breton-ambiance" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="nineteenth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleTourismSection8->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleTourismSection8->titre_texte;?></h2>
                    <p><?php echo $descriptionTourismSection8->description_texte;?></p>
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