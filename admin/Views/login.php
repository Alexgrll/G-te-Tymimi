<?php

    // session_start();
    // require '../src/Models/Database.php';

    // $database = new Database();
    // $pdo = $database->getConnection();

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     // Requête pour récupérer l'utilisateur
    //     $statement = $pdo->prepare("SELECT * FROM utilisateurs NATURAL JOIN roles WHERE email_utilisateur = :email");
    //     $statement->execute(['email' => $email]);
    //     $admin = $statement->fetch();

    //     // Vérification du mot de passe
    //     if ($admin && password_verify($password, $admin['password'])) {
    //         $_SESSION['admin_id'] = $admin['id'];
    //         header('Location: dashboard.php');
    //         exit();
    //     } else {
    //         $error = "Identifiants invalides.";
    //     }
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
        <div id="container-login-admin" class="container">
            <div id="feature-login-admin" class="features">
                <img src="../../public/assets/logo/logo-gite-tymimi.png" alt="Logo du Gîte Tymimi.">
            </div>

            <div id="login-admin">
                <h1>Connexion Admin</h1>
                <form id="admin-form" action="" method="POST">
                    <div class="feature-form">
                        <label for="email">Email :</label>
                        <input type="email" name="email" placeholder="Email utilisateur*">
                    </div>

                    <div class="feature-form">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" placeholder="Mot de passe*">
                    </div>       
                    
                    <div class="feature-form">
                        <input type="submit" value="Se connecter">
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>