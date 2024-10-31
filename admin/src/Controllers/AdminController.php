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

    public function login($email, $password) {
        $adminModel = new AdminModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';


            $admin = $adminModel->findByEmail($email, $password);

            if ($admin && password_verify($password, $admin['password'])) {
                $_SESSION['auth'] = $admin;
                header('Location: /admin/Booking/index');
                exit;
            } else {
                $_SESSION['error_message'] = "Vous n'avez pas l'autorisation d'accéder à cette page.";
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /admin/Admin/index');
        exit;
    }
}