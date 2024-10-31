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
            <h1>Modification de l'utilisateur :</h1>

            <form action="/admin/Utilisateur/update?id=<?php echo $user->id ?>" method="POST">
                <label>Nom de l'utilisateur :</label>
                <input type="text" name="nom_utilisateur" value="<?php echo $user->nom_utilisateur; ?>" required />

                <label>Prénom de l'utilisateur :</label>
                <input type="text" name="prenom_utilisateur" value="<?php echo $user->prenom_utilisateur; ?>" required />

                <label>Email de l'utilisateur :</label>
                <input type="email" name="email_utilisateur" value="<?php echo $user->email_utilisateur; ?>" required />

                <label>Numéro de téléphone de l'utilisateur :</label>
                <input type="tel" name="telephone_utilisateur" value="<?php echo $user->telephone_utilisateur; ?>" />

                <label>Rôle de l'utilisateur :</label>
                <select name="nom_role" id="nom_role">
                    <option value="administrateur">Administrateur</option>
                    <option value="moderateur">Modérateur</option>
                    <option value="utilisateur">Utilisateur</option>
                </select>

                <button type="submit">Enregistrer les modifications</button>
            </form>
        </div>
    </main>
</body>
</html>