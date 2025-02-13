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
            <h1>Textes du site</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Sous-titre</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($listeTextes as $texte): ?>

                        <tr>
                            <th><?php echo $texte->id;?></th>
                            <td><?php echo $texte->titre_texte;?></td>
                            <td><?php echo $texte->sous_titre_texte;?></td>
                            <td><?php echo $texte->description_texte;?></td>
                            <td>
                                <div class="modif-button">
                                    <a id="update" href="">Modifier</a>
                                    <a id="delete" href="" onclick="return confirm('Voulez-vous vraiment supprimer cette image ?');">Supprimer</a>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>