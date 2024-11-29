        <header>
            <aside class="sidenav">
                <div id="sidenav-logo" class="features">
                    <img src="/public/assets/logo/logo_gite_tymimi_header.png" alt="Logo du Gîte Tymimi.">
                </div>

                <div id="sidenav-admin" class="features">
                    <p>Bienvenue</p>                
                    <?php
                    session_start();
                    if (isset($_SESSION['admin_first_name']) && isset($_SESSION['admin_last_name'])): ?>
                        <p><?php echo htmlspecialchars($_SESSION['admin_first_name']); ?></p>
                        <p><?php echo htmlspecialchars($_SESSION['admin_last_name']); ?></p>
                    <?php endif;?>
                </div>

                <div id="sidenav-titre" class="features">
                    <h1>Tableau de&nbsp;bord</h1>
                    <nav>
                        <ul>
                            <li><a href="/admin/Booking/index">Réservations</a></li>
                            <li><a href="/admin/Utilisateur/index">Utilisateurs</a></li>
                            <li><a href="/admin/Texte/index">Textes</a></li>
                            <li><a href="/admin/Images/index">Images</a></li>
                            <li><a href="/admin/Testimonial/index">Avis</a></li>
                        </ul>
                    </nav>
                </div>

                <div>
                    <a href="/admin/Admin/logout">Se déconnecter</a>
                </div>
            </aside>