<?php

namespace Admin\Controllers;

use Admin\Models\ReservationModel;
use App\Controllers\Controller;

class BookingController extends Controller {

    // Méthode pour traiter la lecture des réservations.
    public function index() {

        $reservations = new ReservationModel();

        $listeReservation = $reservations->readAll();
    
        require_once "admin/Views/booking.php";
    }

    // Méthode pour traiter la suppression de réservation.
    public function delete($id) {
        $reservations = new ReservationModel();

        $delete = $reservations->delete($id);

        if ($delete) {
            header('Location:/admin/Booking/index');
            exit;
        } else {
            echo "Erreur lors de la suppression de l'image.";
        }
    }
}