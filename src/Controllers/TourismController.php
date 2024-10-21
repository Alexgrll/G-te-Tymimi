<?php

namespace App\Controllers;

use App\Models\ImageModel;
use App\Models\TexteModel;

class TourismController {

    public function index() {

        $text = new TexteModel;
        $image = new ImageModel;

        $imageHeaderTourism = $image->readOne(1);
        $imageTourismSection1 = $image->readOne(17);
        $imageTourismSection2 = $image->readOne(4);
        $imageTourismSection3 = $image->readOne(16);
        $imageTourismSection4 = $image->readOne(3);
        $imageTourismSection5 = $image->readOne(24);
        $imageTourismSection6 = $image->readOne(18);
        $imageTourismSection7 = $image->readOne(6);
        $imageTourismSection8 = $image->readOne(8);

        $subtitleTourismSection1 = $text->readOne(5);
        $titleTourismSection1 = $text->readOne(5);
        $descriptionTourismSection1 = $text->readOne(5);
        $subtitleTourismSection2 = $text->readOne(6);
        $titleTourismSection2 = $text->readOne(6);
        $descriptionTourismSection2 = $text->readOne(6);
        $subtitleTourismSection3 = $text->readOne(7);
        $titleTourismSection3 = $text->readOne(7);
        $descriptionTourismSection3 = $text->readOne(7);
        $subtitleTourismSection4 = $text->readOne(8);
        $titleTourismSection4 = $text->readOne(8);
        $descriptionTourismSection4 = $text->readOne(8);
        $subtitleTourismSection5 = $text->readOne(9);
        $titleTourismSection5 = $text->readOne(9);
        $descriptionTourismSection5 = $text->readOne(9);
        $subtitleTourismSection6 = $text->readOne(10);
        $titleTourismSection6 = $text->readOne(10);
        $descriptionTourismSection6 = $text->readOne(10);
        $subtitleTourismSection7 = $text->readOne(11);
        $titleTourismSection7 = $text->readOne(11);
        $descriptionTourismSection7 = $text->readOne(11);
        $subtitleTourismSection8 = $text->readOne(12);
        $titleTourismSection8 = $text->readOne(12);
        $descriptionTourismSection8 = $text->readOne(12);

        require_once "Views/tourism.php";
    }
}