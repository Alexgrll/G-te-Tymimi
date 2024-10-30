<?php

namespace Admin\Controllers;

use App\Controllers\Controller;
use App\Models\ImageModel;

class ImagesController extends Controller {

    public function index() {

        $image = new ImageModel;

        // Page Accueil
        $imageHeaderHome = $image->readOne(12);
        $image1 = $image->readOne(32);
        $image2 = $image->readOne(30);
        $image3 = $image->readOne(27);
        $imageTestimonial = $image->readOne(2);
        $imageBooking = $image->readOne(29);

        // Page Gite
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

        // Page Tourisme
        $imageHeaderTourism = $image->readOne(1);
        $imageTourismSection1 = $image->readOne(17);
        $imageTourismSection2 = $image->readOne(4);
        $imageTourismSection3 = $image->readOne(16);
        $imageTourismSection4 = $image->readOne(3);
        $imageTourismSection5 = $image->readOne(24);
        $imageTourismSection6 = $image->readOne(18);
        $imageTourismSection7 = $image->readOne(6);
        $imageTourismSection8 = $image->readOne(8);

        // Page Contact
        $imageHeaderContact = $image->readOne(28);

        // Page Réservation
        $imageHeaderBooking = $image->readOne(14);

        // Page Mentions
        $imageHeaderCopy = $image->readOne(23);
    
        require_once "admin/Views/images.php";
    }
}