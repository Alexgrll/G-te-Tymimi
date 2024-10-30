<?php

namespace Admin\Controllers;

use Admin\Models\AdminModel;
use App\Controllers\Controller;

class AdminController extends Controller {

    public function index() {

        $login = new AdminModel();
    
        require_once "admin/Views/login.php";
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $admin = $this->login($email, $password);
            if ($admin) {
                $_SESSION['admin_id'] = $admin['id'];
                header('/admin/Views/booking.php');
                exit;
            } else {
                echo "Email ou mot de passe incorrect.";
            }
        }
        require_once 'admin/Views/login.php';
    }

    public function logout() {
        session_destroy();
        header('Location: admin/Views/login.php');
        exit;
    }
}