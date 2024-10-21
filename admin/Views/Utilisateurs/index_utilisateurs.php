<?php

?>

</header>

<main>

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
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th><?php echo $sAU->id_utilisateur;?></th>
                    <td><?php echo $sAU->nom_utilisateur;?></td>
                    <td><?php echo $sAU->prenom_utilisateur;?></td>
                    <td><?php echo $sAU->email_utilisateur;?></td>
                    <td><?php echo $sAU->telephone_utilisateur;?></td>
                    <td><?php echo $sAU->nom_role;?></td>
                </tr>
            </tbody>

        </table>
    </div>
</div>



</main>