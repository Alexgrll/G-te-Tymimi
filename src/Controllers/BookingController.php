<?php

namespace App\Controllers;

use App\Models\ReservationModel;
use App\Models\UtilisateurModel;

class ReservationController {

    

    public function booking() {

        $utilisateurModel = new UtilisateurModel();
        $reservationModel = new ReservationModel();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nom = $_POST['nom'] ?? '';
            $prenom = $_POST['prenom'] ?? '';
            $email = $_POST['email'] ?? '';
            $telephone = !empty($_POST['tel']) ? $_POST['tel'] : '';
    
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
                        'telephone_utilisateur' => $telephone,
                    ]);
                } else {
                    // Récupérer l'ID de l'utilisateur existant
                    $idUtilisateur = $utilisateur['id'];
                }
            }
        }
    }
}