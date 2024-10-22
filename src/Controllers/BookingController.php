<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\UtilisateurModel;

class ReservationController {

    public function booking() {
        $nom = $_POST['nom'] ?? '';
        $prenom = $_POST['prenom'] ?? '';
        $email = $_POST['email'] ?? '';
        $telephone = $_POST['telephone'] ?? '';

        $errors = [];

        // Récupérer l'utilisateur ou créer un nouvel utilisateur
        $utilisateurModel = new UtilisateurModel();

        if (empty($nom) || !preg_match('/^[a-zA-Z -]+$/', $nom)) {
            $errors[$nom] = "Le champs 'Nom' n'est pas valide.";
        }

        if (empty($prenom) || !preg_match('/^[a-zA-Z -]+$/', $prenom)) {
            $errors[$prenom] = "Le champs 'Prénom' n'est pas valide.";
        }

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$email] = "Il ne s'agit pas d'un mail.";
        } else {
            $utilisateur = $utilisateurModel->findByEmail($email);
            if (!$utilisateur) {
                // Insérer un nouvel utilisateur si inexistant
                $idUtilisateur = $utilisateurModel->create([
                    'nom_utilisateur' => $nom,
                    'prenom_utilisateur' => $prenom,
                    'email_utilisateur' => $email,
                    'telephone_utilisateur' => $telephone,
                ]);
            } else {
                // Récupérer l'ID de l'utilisateur existant
                $idUtilisateur = $utilisateur['id'];
            }
        }

        $data = json_decode(file_get_contents('php://input'), true);

        if ($data) {
            $date_arrivee = $data['date_arrivee'];
            $date_depart = $data['date_depart'];
            $duree_sejour = $data['duree_sejour'];
            $tarif_nuit = $data['tarif_nuit'];
            $sous_total = $data['sous_total'];
            $frais_menage = $data['frais_menage'];
            $total = $data['total'];

            // Créer une nouvelle instance du modèle de réservation
            $reservationModel = new ReservationModel();

            // Insérer la réservation dans la base de données
            $success = $reservationModel->create([
                'date_arrivee_reservation' => $date_arrivee,
                'date_depart_reservation' => $date_depart,
                'duree_sejour_reservation' => $duree_sejour,
                'tarif_nuit_reservation' => $tarif_nuit,
                'sous_total_reservation' => $sous_total,
                'frais_menage_reservation' => $frais_menage,
                'total_reservation' => $total,
                'id_utilisateur_reservation' => $idUtilisateur,
            ]);

            if ($success) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Données invalides']);
        }
    }
}