<?php

namespace Admin\Controllers;

use App\Controllers\Controller;
use App\Models\TexteModel;

class TexteController extends Controller {

    public function index() {

        $textes = new TexteModel();

        $listeTextes = $textes->read();
    
        require_once "admin/Views/text.php";
    }
}