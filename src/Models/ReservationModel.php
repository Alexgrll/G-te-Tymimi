<?php

namespace App\Models;

class ReservationModel extends Model {
    
	protected $date_arrivee_reservation;
    protected $date_depart_reservation;
	protected $duree_sejour_reservation;
	protected $tarif_nuit_reservation;
	protected $sous_total_reservation;
	protected $frais_menage_reservation;
	protected $total_reservation;
	protected $id_utilisateur_reservation;

    public function __construct() {
        parent::__construct();
        $this->table = 'reservations';
    }

}