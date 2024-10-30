<?php

namespace Admin\Controllers;

use Admin\Models\UtilisateurModel;
use App\Controllers\Controller;

class UtilisateurController extends Controller {

    public function index(){

        $utilisateurs = new UtilisateurModel();

        $listeUtilisateur = $utilisateurs->readAll();
    
        require_once "admin/Views/users.php";

    }

}