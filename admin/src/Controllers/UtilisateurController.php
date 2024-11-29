<?php

namespace Admin\Controllers;

use Admin\Models\UtilisateurModel;
use App\Controllers\Controller;

class UtilisateurController extends Controller {

    // Méthode pour traiter la lecture des utilisateurs.
    public function index(){

        $utilisateurs = new UtilisateurModel();

        $listeUtilisateur = $utilisateurs->readAll();
    
        require_once "admin/Views/users.php";
    }

    // Méthode pour traiter la modification d'utilisateur
    public function update($id) {

        $userModel = new UtilisateurModel;
    
        $user = $userModel->readOne($id);
    
        if (!$user) {
            header("Location: /admin/Utilisateur/index");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!filter_var($_POST['email_utilisateur'], FILTER_VALIDATE_EMAIL)) {
                $errorMessage = "L'email est invalide.";
            } else {
                $data = [
                    'nom_utilisateur' => htmlspecialchars(trim($_POST['nom_utilisateur'])),
                    'prenom_utilisateur' => htmlspecialchars(trim($_POST['prenom_utilisateur'])),
                    'email_utilisateur' => htmlspecialchars(trim($_POST['email_utilisateur'])),
                    'telephone_utilisateur' => htmlspecialchars(trim($_POST['telephone_utilisateur'])),
                    'nom_role' => htmlspecialchars(trim($_POST['nom_role']))
                ];
    
                $userModel->update($id, $data);
                header("Location: /admin/Utilisateur/index");
                exit;
            }
        }
        include "admin/Views/updateUsers.php";
    }

    // Méthode pour traiter la suppression d'un utilisateur.
    public function delete($id) {

        if (!is_numeric($id) || $id <= 0) {
            echo "ID invalide.";
            exit;
        }

        $user = new UtilisateurModel;
        $delete = $user->delete($id);

        if ($delete) {
            header('Location: /admin/Utilisateur/index');
            exit;
        } else {
            echo "Erreur lors de la suppression d'un utilisateur.";
        }
    }
}