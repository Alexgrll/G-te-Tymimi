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

    // Méthode pour traiter la modification d'image 
    public function update($id) {

        $userModel = new UtilisateurModel;
    
        $user = $userModel->readOne($id);
    
        if (!$user) {
            header("Location: /admin/Utilisateur/index");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'nom_utilisateur' => $_POST['nom_utilisateur'],
                'prenom_utilisateur' => $_POST['prenom_utilisateur'],
                'email_utilisateur' => $_POST['email_utilisateur'],
                'telephone_utilisateur' => $_POST['telephone_utilisateur'],
                'nom_role' => $_POST['nom_role']
            ];
    
            // Enregistrez les modifications en passant l'ID et les données
            $userModel->update($id, $data);
            header("Location: /admin/Utilisateur/index");
            exit;
        }
        include "admin/Views/updateUsers.php";
    }

    // Méthode pour traiter la suppression d'image.
    public function delete($id) {
        $user = new UtilisateurModel;
        $delete = $user->delete($id);

        if ($delete) {
            header('Location:/admin/Utilisateur/index');
            exit;
        } else {
            echo "Erreur lors de la suppression de l'image.";
        }
    }
}