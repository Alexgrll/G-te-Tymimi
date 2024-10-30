<?php

namespace App\Controllers;

use App\Models\ImageModel;
use App\Models\TexteModel;

class LodgeController {

    public function index() {

        $text = new TexteModel;
        $image = new ImageModel;

        $imageHeaderLodge = $image->readOne(31);
        $imageLodge = $image->readOne(5);
        $imageCarousel1 = $image->readOne(15);
        $imageCarousel2 = $image->readOne(13);
        $imageCarousel3 = $image->readOne(11);
        $imageCarousel4 = $image->readOne(7);
        $imageCarousel5 = $image->readOne(20);
        $imageCarousel6 = $image->readOne(19);
        $imageCarousel7 = $image->readOne(9);
        $imageCarousel8 = $image->readOne(21);
        $imageCarousel9 = $image->readOne(22);
        $imageOutside = $image->readOne(10);

        $subtitleLodge = $text->readOne(2);
        $titleLodge = $text->readOne(2);
        $descriptionLodge = $text->readOne(2);
        $subtitleInside = $text->readOne(3);
        $titleInside = $text->readOne(3);
        $descriptionInside = $text->readOne(3);
        $subtitleOutside = $text->readOne(4);
        $titleOutside = $text->readOne(4);
        $descriptionOutside = $text->readOne(4);

        require_once "Views/lodge.php";
    }
}