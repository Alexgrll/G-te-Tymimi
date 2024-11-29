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
                <input type="text" name="nom_utilisateur" value="<?php echo htmlspecialchars($user->nom_utilisateur, ENT_QUOTES, 'UTF-8'); ?>" required />

                <label>Prénom de l'utilisateur :</label>
                <input type="text" name="prenom_utilisateur" value="<?php echo htmlspecialchars($user->prenom_utilisateur, ENT_QUOTES, 'UTF-8'); ?>" required />

                <label>Email de l'utilisateur :</label>
                <input type="email" name="email_utilisateur" value="<?php echo htmlspecialchars($user->email_utilisateur, ENT_QUOTES, 'UTF-8'); ?>" required />

                <label>Numéro de téléphone de l'utilisateur :</label>
                <input type="tel" name="telephone_utilisateur" value="<?php echo htmlspecialchars($user->telephone_utilisateur, ENT_QUOTES, 'UTF-8'); ?>" />

                <label>Rôle de l'utilisateur :</label>
                <select name="nom_role" id="nom_role">
                    <option value="administrateur"<?php if ($user->nom_role == 'administrateur') echo 'selected'; ?>>Administrateur</option>
                    <option value="moderateur"<?php if ($user->nom_role == 'moderateur') echo 'selected'; ?>>Modérateur</option>
                    <option value="utilisateur"<?php if ($user->nom_role == 'utilisateur') echo 'selected'; ?>>Utilisateur</option>
                </select>

                <button type="submit">Enregistrer les modifications</button>
            </form>
        </div>
    </main>
</body>
</html>