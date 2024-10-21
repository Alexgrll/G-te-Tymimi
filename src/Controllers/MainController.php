<?php

namespace App\Controllers;

use App\Models\ImageModel;
use App\Models\TexteModel;

class MainController extends Controller {

    public function index() {

        $text = new TexteModel;
        $image = new ImageModel;

        $imageHeaderHome = $image->readOne(12);
        $image1 = $image->readOne(21);
        $image2 = $image->readOne(9);
        $image3 = $image->readOne(1);
        $imageTestimonial = $image->readOne(2);
        $imageBooking = $image->readOne(7);

        $subtitleHome = $text->readOne(1);
        $titleHome = $text->readOne(1);
        $descriptionHome = $text->readOne(1);
        $titleImage1 = $text->readOne(16);
        $titleImage2 = $text->readOne(17);
        $titleImage3 = $text->readOne(18);


        require_once "Views/index.php";
    }

    public function contact() {

        $text = new TexteModel;
        $image = new ImageModel;

        $imageHeaderContact = $image->readOne(7);

        $titleContact = $text->readOne(13);
        $descriptionContact = $text->readOne(13);

        require_once "Views/contact.php";
    }

}