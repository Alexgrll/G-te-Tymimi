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

    
	/**
	 * Obtenir la valeur de date_arrivee_reservation
	 */ 
	public function getDate_arrivee_reservation()
	{
		return $this->date_arrivee_reservation;
	}

	/**
	 * Définir la valeur de date_arrivee_reservation
	 *
	 * @return  self
	 */ 
	public function setDate_arrivee_reservation($date_arrivee_reservation)
	{
		$this->date_arrivee_reservation = $date_arrivee_reservation;

		return $this;
	}

    /**
     * Obtenir la valeur de date_depart_reservation
     */ 
    public function getDate_depart_reservation()
    {
        return $this->date_depart_reservation;
    }

    /**
     * Définir la valeur de date_depart_reservation
     *
     * @return  self
     */ 
    public function setDate_depart_reservation($date_depart_reservation)
    {
        $this->date_depart_reservation = $date_depart_reservation;

        return $this;
    }

	/**
	 * Obtenir la valeur de duree_sejour_reservation
	 */ 
	public function getDuree_sejour_reservation()
	{
		return $this->duree_sejour_reservation;
	}

	/**
	 * Définir la valeur de duree_sejour_reservation
	 *
	 * @return  self
	 */ 
	public function setDuree_sejour_reservation($duree_sejour_reservation)
	{
		$this->duree_sejour_reservation = $duree_sejour_reservation;

		return $this;
	}

	/**
	 * Obtenir la valeur de tarif_nuit_reservation
	 */ 
	public function getTarif_nuit_reservation()
	{
		return $this->tarif_nuit_reservation;
	}

	/**
	 * Définir la valeur de tarif_nuit_reservation
	 *
	 * @return  self
	 */ 
	public function setTarif_nuit_reservation($tarif_nuit_reservation)
	{
		$this->tarif_nuit_reservation = $tarif_nuit_reservation;

		return $this;
	}

	/**
	 * Obtenir la valeur de sous_total_reservation
	 */ 
	public function getSous_total_reservation()
	{
		return $this->sous_total_reservation;
	}

	/**
	 * Définir la valeur de sous_total_reservation
	 *
	 * @return  self
	 */ 
	public function setSous_total_reservation($sous_total_reservation)
	{
		$this->sous_total_reservation = $sous_total_reservation;

		return $this;
	}

	/**
	 * Obtenir la valeur de frais_menage_reservation
	 */ 
	public function getFrais_menage_reservation()
	{
		return $this->frais_menage_reservation;
	}

	/**
	 * Définir la valeur de frais_menage_reservation
	 *
	 * @return  self
	 */ 
	public function setFrais_menage_reservation($frais_menage_reservation)
	{
		$this->frais_menage_reservation = $frais_menage_reservation;

		return $this;
	}

	/**
	 * Obtenir la valeur de total_reservation
	 */ 
	public function getTotal_reservation()
	{
		return $this->total_reservation;
	}

	/**
	 * Définir la valeur de total_reservation
	 *
	 * @return  self
	 */ 
	public function setTotal_reservation($total_reservation)
	{
		$this->total_reservation = $total_reservation;

		return $this;
	}

	/**
	 * Obtenir la valeur de id_utilisateur_reservation
	 */ 
	public function getId_utilisateur_reservation()
	{
		return $this->id_utilisateur_reservation;
	}

	/**
	 * Définir la valeur de id_utilisateur_reservation
	 *
	 * @return  self
	 */ 
	public function setId_utilisateur_reservation($id_utilisateur_reservation)
	{
		$this->id_utilisateur_reservation = $id_utilisateur_reservation;

		return $this;
	}
}