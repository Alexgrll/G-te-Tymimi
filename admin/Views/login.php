    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion Admin</title>
        <link rel="stylesheet" href="/public/css/styles.css">
        <link rel="icon" href="/public/assets/logo/logo_gite_tymimi_header.png" type="image/x-icon">
    </head>
    <body>
        <div id="container-login-admin" class="container">
            <div id="feature-login-admin" class="features">
                <img src="/public/assets/logo/logo_gite_tymimi_header.png" alt="Logo du Gîte Tymimi.">
            </div>

            <div id="login-admin">
                <h1>Connexion Admin</h1>
                <form id="admin-form" action="/admin/Admin/login" method="POST">
                    <div class="feature-form">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" placeholder="Email utilisateur*">
                    </div>

                    <div class="feature-form">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" placeholder="Mot de passe*">
                    </div>       
                    
                    <div class="feature-form">
                        <input type="submit" value="Se connecter">
                    </div>

                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="error-message">
                            <?= htmlspecialchars($_SESSION['error_message']) ?>
                            <?php unset($_SESSION['error_message']); ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </body>
    </html>