<?php

    include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctypeAdmin.php");

?>

</head>

<body> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/headerAdmin.php")

    ?>

</header>

    <main class="main-admin">
        <div>
            <h1>Galerie Photos</h1>

            <div>
                <h2>Image Page d'Accueil :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderHome->nom_image; ?>" alt="Image de l'en-tête de l'accueil." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image1->nom_image; ?>" alt="Image 1 de l'accueil." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image2->nom_image; ?>" alt="Image 2 de l'accueil." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image3->nom_image; ?>" alt="Image 3 de l'accueil." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTestimonial->nom_image; ?>" alt="Image section avis." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageBooking->nom_image; ?>" alt="Image section réservation." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Image Page du Gîte :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderLodge->nom_image; ?>" alt="Image de l'en-tête de la page gîte." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageLodge->nom_image; ?>" alt="Image présentation gîte." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel1->nom_image; ?>" alt="Carousel image 1." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel2->nom_image; ?>" alt="arousel image 2." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel3->nom_image; ?>" alt="arousel image 3." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel4->nom_image; ?>" alt="arousel image 4." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel5->nom_image; ?>" alt="arousel image 5." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel6->nom_image; ?>" alt="arousel image 6." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel7->nom_image; ?>" alt="arousel image 7." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel8->nom_image; ?>" alt="arousel image 8." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageCarousel9->nom_image; ?>" alt="arousel image 9." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageOutside->nom_image; ?>" alt="Image de l'exterieur." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Image Page Tourisme :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderTourism->nom_image; ?>" alt="Image de l'en-tête de la page tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection1->nom_image; ?>" alt="Image de la 1 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection2->nom_image; ?>" alt="Image de la 2 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection3->nom_image; ?>" alt="Image de la 3 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection4->nom_image; ?>" alt="Image de la 4 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection5->nom_image; ?>" alt="Image de la 5 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection6->nom_image; ?>" alt="Image de la 6 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection7->nom_image; ?>" alt="Image de la 7 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageTourismSection8->nom_image; ?>" alt="Image de la 8 section tourisme." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Image Page Contact :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderContact->nom_image; ?>" alt="Image de l'en-tête de la page contact." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Image Page Réservation :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderBooking->nom_image; ?>" alt="Image de l'en-tête de la page réservation." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div>
                <h2>Image Page Mentions Légales :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $imageHeaderCopy->nom_image; ?>" alt="Image de l'en-tête de la page mentions légales." />
                        </td>

                        <td>
                            <a href="">Modifier</a>

                            <a href="" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                        </td>
                    </tr>
                </table>
            </div>        
        </div>
    </main>
</body>
</html>