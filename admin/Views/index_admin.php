<?php
    // session_start();
    // require '../src/Models/Database.php';

    // if (!isset($_SESSION['admin_id'])) {
    //     header('Location: login.php');
    //     exit();
    // }
?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion Admin</title>
        <link rel="stylesheet" href="../../public/css/styles.css">
        <link rel="icon" href="../../public/assets/logo/logo-gite-tymimi.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <div class="sidenav">
                <div id="sidenav-logo" class="features">
                    <img src="../../public/assets/logo/logo-gite-tymimi.png" alt="Logo du Gîte Tymimi.">
                </div>

                <div id="sidenav-admin" class="features">
                    <p>Le prenom de l'admin</p>
                    <p>Le nom de l'admin</p>
                </div>

                <div id="sidenav-titre" class="features">
                    <h1>Tableau de bord</h1>
                    <nav>
                        <ul>
                            <li></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <a href="./logout.php">Se déconnecter</a>
                </div>
            </div>


    </body>
    </html>    