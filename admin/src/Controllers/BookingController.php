<?php

namespace Admin\Controllers;

use Admin\Models\ReservationModel;
use App\Controllers\Controller;

class BookingController extends Controller {

    public function index() {

        $reservations = new ReservationModel();

        $listeReservation = $reservations->readAll();
    
        require_once "admin/Views/booking.php";
    }
}