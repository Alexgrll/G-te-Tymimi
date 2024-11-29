<?php

namespace Admin\Controllers;

use Admin\Models\AdminModel;
use App\Controllers\Controller;

class AdminController extends Controller {

    public function __construct() {
        session_start();
    }

    public function index() {
        require_once "admin/Views/login.php";
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adminModel = new AdminModel();

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = $_POST['password'];

            $admin = $adminModel->findByEmail($email, $password);

            if ($admin && password_verify($password, $admin->mdp_utilisateur)) {
                session_regenerate_id(true);
                $_SESSION['auth'] = $admin;
                $_SESSION['admin_first_name'] = $admin->prenom_utilisateur;
                $_SESSION['admin_last_name'] = $admin->nom_utilisateur;
                header('Location: /admin/Booking/index');
                exit;

            } else {
                $_SESSION['error_message'] = "Vous n'avez pas l'autorisation d'accéder à cette page.";
                header('Location: /admin/Admin/index');
                exit;
            }
        }
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();
        header('Location: /admin/Admin/index');
        exit;
    }
}