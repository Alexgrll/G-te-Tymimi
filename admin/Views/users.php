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
            <h1>Liste des utilisateurs</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Rôle</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($listeUtilisateur as $utilisateur): ?>
                        <tr>
                            <th><?php echo htmlspecialchars($utilisateur->id, ENT_QUOTES, 'UTF-8'); ?></th>
                            <td><?php echo htmlspecialchars($utilisateur->nom_utilisateur, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($utilisateur->prenom_utilisateur, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($utilisateur->email_utilisateur, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($utilisateur->telephone_utilisateur, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td><?php echo htmlspecialchars($utilisateur->nom_role, ENT_QUOTES, 'UTF-8'); ?></td>
                            <td>
                                <div class="modif-button">
                                    <a id="update" href="/admin/Utilisateur/update/<?php echo htmlspecialchars($utilisateur->id, ENT_QUOTES, 'UTF-8'); ?>">Modifier</a>
                                    <a id="delete" href="/admin/Utilisateur/delete/<?php echo htmlspecialchars($utilisateur->id, ENT_QUOTES, 'UTF-8'); ?>" 
                                    onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?');">Supprimer</a>
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