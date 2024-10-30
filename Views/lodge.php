<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctype.php")

?>
</head>

<body class="lodge"> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/header.php")

    ?>
    </header>

    <main>
        <section id="section-intro-lodge" class="section">
            <div id="image-container-lodge" class="container">
                <img src="/public/assets/images/<?php echo $imageHeaderLodge->nom_image;?>" alt="Photo du séjour du gîte.">
                
                <div class="container-title">
                    <h1>Gîte Tymimi</h1>
                </div>
            </div>
        </section>

        <section id="section-lodge-description" class="section">
            <div id="container-lodge-description" class="container">
                <div id="lodge-features" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="ninth-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleLodge->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleLodge->titre_texte;?></h2>
                    <p><?php echo $descriptionLodge->description_texte;?></p>
                </div>

                <div id="lodge-image" class="features">
                    <img src="/public/assets/images/<?php echo $imageLodge->nom_image;?>" alt="Photo des côtes bretonnes.">                
                </div>
            </div>
        </section>

        <section id="section-carousel" class="section">
            <div id="container-carousel" class="container">
                <div id="feature-carousel" class="features">
                    <div id="first-carousel" class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel1->nom_image;?>" alt="Photo du séjour.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel2->nom_image;?>" alt="Photo du séjour d'un autre point de vue.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel3->nom_image;?>" alt="Photo de la cuisine.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel4->nom_image;?>" alt="Photo de l'entrée du gîte.">
                            </div>
                        </div>

                        <div class="carousel-indicators">
                            <div class="border-dot"><span class="dot active" data-target="first-carousel" data-slide-to="0"></span></div>
                            <div class="border-dot"><span class="dot" data-target="first-carousel" data-slide-to="1"></span></div>
                            <div class="border-dot"><span class="dot" data-target="first-carousel" data-slide-to="2"></span></div>
                            <div class="border-dot"><span class="dot" data-target="first-carousel" data-slide-to="3"></span></div>
                        </div>

                        <button class="carousel-control prev" data-target="carousel-living-room">&#10092;</button>
                        <button class="carousel-control next" data-target="carousel-living-room">&#10093;</button>

                    </div>

                    <div id="second-carousel" class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/public/assets/images/<?php echo $imageCarousel5->nom_image;?>" alt="Photo d'une chambre contenant un lit double.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel6->nom_image;?>" alt="La deuxième chambre contenant un lit double.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel7->nom_image;?>" alt="Vue du mobilier de la deuxième chambre.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel8->nom_image;?>" alt="Photo d'une chambre contenant deux lits simples.">
                            </div>

                            <div class="carousel-item">
                                <img src="/public/assets/images/<?php echo $imageCarousel9->nom_image;?>" alt="Photo de la salle d'eau.">
                            </div>
                        </div>

                        <div class="carousel-indicators">
                            <div class="border-dot"><span class="dot active" data-target="second-carousel" data-slide-to="0"></span></div>
                            <div class="border-dot"><span class="dot" data-target="second-carousel" data-slide-to="1"></span></div>
                            <div class="border-dot"><span class="dot" data-target="second-carousel" data-slide-to="2"></span></div>
                            <div class="border-dot"><span class="dot" data-target="second-carousel" data-slide-to="3"></span></div>
                            <div class="border-dot"><span class="dot" data-target="second-carousel" data-slide-to="4"></span></div> 
                        </div>

                        <button class="carousel-control prev" data-target="carousel-living-room">&#10092;</button>
                        <button class="carousel-control next" data-target="carousel-living-room">&#10093;</button>
                    
                    </div>

                    <div id="imageModal" class="modal">
                        <span class="close-btn" onclick="closeModal()">&times;</span>
                        <button class="modal-prev" onclick="prevImage()">&#10092;</button>
                        <img class="modal-content" id="modalImg">
                        <button class="modal-next" onclick="nextImage()">&#10093;</button>
                    </div>
                </div>

                <div id="features-interior" class="features">
                    <div id="feature-interior" class="feature-item">
                        <div class="feature-header-lodge">
                            <div class="line-container horizontal">
                                <div id="tenth-line" class="line"></div>
                            </div>

                            <h3><?php echo $subtitleInside->sous_titre_texte;?></h3>
                        </div>
                        <h2><?php echo $titleInside->titre_texte;?></h2>
                        <p><?php echo $descriptionInside->description_texte;?></p>
                    </div>

                    <div class="feature-icons">
                        <div class="icon-group">
                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_double_bed.png" alt="Icône d'un lit double.">
                                <p>Deux lits doubles</p>
                            </div>

                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_chest.png" alt="Icône d'une commode.">
                                <p>Chambres équipées de rangement</p>
                            </div>

                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_shower_room.png" alt="Icône d'une baignoire.">
                                <p>Salle d'eau</p>
                            </div>
                        </div>

                        <div class="icon-group">
                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_single_bed.png" alt="Icône d'un lit simple.">
                                <p>Deux lits simples</p>
                            </div>

                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_kitchen.png" alt="Icône d'ustensiles de cuisine.">
                                <p>Cuisine équipée</p>
                            </div>

                            <div class="icon-item">
                                <img src="/public/assets/icons/icon_sun.png" alt="Icône d'un soleil.">
                                <p>Accès jardin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-garden" class="section">
            <div id="container-garden" class="container">
                <div id="garden-features" class="features">
                    <div class="feature-top">
                        <div class="line-container horizontal">
                            <div id="eleventh-line" class="line"></div>
                        </div>

                        <h3><?php echo $subtitleOutside->sous_titre_texte;?></h3>
                    </div>
                    <h2><?php echo $titleOutside->titre_texte;?></h2>
                    <p><?php echo $descriptionOutside->description_texte;?></p>

                    <div id="reservation-btn" class="button">
                        <a href="/Booking/index" role="button" aria-label="réservation">Réservation</a>
                    </div>
                </div>

                <div id="garden-image" class="features">
                    <img src="/public/assets/images/<?php echo $imageOutside->nom_image;?>" alt="Photo du jardin.">
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