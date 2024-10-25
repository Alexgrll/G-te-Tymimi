<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\UtilisateurModel;

class BookingController {

    public function booking() {

        $utilisateurModel = new UtilisateurModel();
        $reservationModel = new ReservationModel();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $info = json_decode(file_get_contents("php://input"), true);

            $nom = $info['nom'] ?? '';
            $prenom = $info['prenom'] ?? '';
            $email = $info['email'] ?? '';
            $telephone = !empty($info['telephone']) ? $info['telephone'] : '';
    
            $errors = [];

            if (empty($nom) || !preg_match('/^[a-zA-Z -]+$/', $nom)) {
                $errors[] = "Le champs 'Nom' n'est pas valide.";
            }

            if (empty($prenom) || !preg_match('/^[a-zA-Z -]+$/', $prenom)) {
                $errors[] = "Le champs 'Prénom' n'est pas valide.";
            }

            if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Il ne s'agit pas d'un email.";
            } else {
                $utilisateur = $utilisateurModel->findByEmail($email);
                if (!$utilisateur) {
 
                    // Insérer un nouvel utilisateur si inexistant
                    $idUtilisateur = $utilisateurModel->create([
                        'nom_utilisateur' => $nom,
                        'prenom_utilisateur' => $prenom,
                        'email_utilisateur' => $email,
                        'telephone_utilisateur' => $telephone
                    ]);
                } else {
                    // Récupérer l'ID de l'utilisateur existant
                    $idUtilisateur = $utilisateur->id;
                
                }

            $date_arrivee = $info['date'][0];
            $date_depart = array_pop($info['date']);
            $nb_nuits = $info['nb_nuits'];
            $tarif_nuit = $info['tarif_nuit'];
            $sous_total = $info['sous_total'];
            $frais_supp = $info['frais'];
            $total = $info['total'];
            

            $reservationModel->create([
                'date_arrivee_reservation'	=> $date_arrivee,
                'date_depart_reservation' => $date_depart,
                'nombre_nuit_reservation' => $nb_nuits,
                'tarif_nuit_reservation' => $tarif_nuit,
                'sous_total_reservation' => $sous_total,
                'frais_menage_reservation' => $frais_supp,
                'total_reservation' => $total,
                'id_utilisateur_reservation' => $idUtilisateur
            ]);
            }
        }
    }
}