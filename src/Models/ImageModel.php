<?php

namespace App\Models;

/**
 * Modèle pour la table "images"
 */
class ImageModel extends Model {

    protected $nom_image;

    public function __construct() {
        parent::__construct();
        $this->table = 'images';
    }

    /**
     * Obtenir la valeur de nom_image
     */ 
    public function getNom_image()
    {
        return $this->nom_image;
    }

    /**
     * Définir la valeur de nom_image
     *
     * @return  self
     */ 
    public function setNom_image($nom_image)
    {
        $this->nom_image = $nom_image;

        return $this;
    }
}