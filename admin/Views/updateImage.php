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
            <h1>Modification de l'image :</h1>

            <form action="/admin/Images/update?id=<?php echo $image->id ?>" method="POST" enctype="multipart/form-data">
                <label>Nom de l'image :</label>
                <input type="text" name="nom_image" value="<?php echo $image->nom_image; ?>" required />

                <label>Télécharger une nouvelle image :</label>
                <input type="file" name="new_image" />

                <button type="submit">Enregistrer les modifications</button>
            </form>
        </div>
    </main>
</body>
</html>