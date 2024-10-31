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
            <h1>Liste des réservations</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Date d'Arrivée</th>
                            <th>Date de Départ</th>
                            <th>Nombre(s) de Nuit(s)</th>
                            <th>Tarif Nuit</th>
                            <th>Sous Total (€)</th>
                            <th>Frais de Ménage</th>
                            <th>Total (€)</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($listeReservation as $reservation): ?>

                        <tr>
                            <th><?php echo $reservation->id_utilisateur;?></th>
                            <td><?php echo $reservation->nom_utilisateur;?></td>
                            <td><?php echo $reservation->prenom_utilisateur;?></td>
                            <td><?php echo $reservation->email_utilisateur;?></td>
                            <td><?php echo $reservation->telephone_utilisateur;?></td>
                            <td><?php echo $reservation->date_arrivee_reservation;?></td>
                            <td><?php echo $reservation->date_depart_reservation;?></td>
                            <td><?php echo $reservation->nombre_nuit_reservation;?></td>
                            <td><?php echo $reservation->tarif_nuit_reservation;?></td>
                            <td><?php echo $reservation->sous_total_reservation;?></td>
                            <td><?php echo $reservation->frais_menage_reservation;?></td>
                            <td><?php echo $reservation->total_reservation;?></td>
                            <td>
                                <div class="modif-button">
                                    <a id="update" href="">Modifier</a>
                                    <a id="delete" href="/admin/Booking/delete/<?php echo $reservation->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette réservation ?');">Supprimer</a>
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