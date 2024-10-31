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

                    <?php foreach ($images['home'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page d'accueil." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div>
                <h2>Image Page du Gîte :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach ($images['lodge'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page gîte." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div>
                <h2>Image Page Tourisme :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach ($images['tourism'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page tourisme." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div>
                <h2>Image Page Contact :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach ($images['contact'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page contact." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div>
                <h2>Image Page Réservation :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach ($images['booking'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page réservation." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <div>
                <h2>Image Page Mentions Légales :</h2>
                <table>
                    <tr>
                        <th>Nom de l'image</th>
                        <th>Action</th>
                    </tr>

                    <?php foreach ($images['copy'] as $image): ?>
                    <tr>
                        <td>
                            <img src="/public/assets/images/<?php echo $image->nom_image; ?>" alt="Image de la page mentions légales." />
                        </td>
                        <td>
                            <div class="modif-button">
                                <a id="update" href="/admin/Images/update/<?php echo $image->id ?>">Modifier</a>
                                <a id="delete" href="/admin/Images/delete/<?php echo $image->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>        
        </div>
    </main>
</body>
</html>