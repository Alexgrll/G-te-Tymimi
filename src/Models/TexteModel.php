<?php

namespace App\Models;

/**
 * Modèle pour la table "textes"
 */
class TexteModel extends Model {

    protected $titre_texte;
    protected $sous_titre_texte;
    protected $description_texte;

    public function __construct() {
        parent::__construct();
        $this->table = 'textes';
    }

    /**
     * Obtenir la valeur de titre_texte
     */ 
    public function getTitre_texte()
    {
        return $this->titre_texte;
    }

    /**
     * Définir la valeur de titre_texte
     *
     * @return  self
     */ 
    public function setTitre_texte($titre_texte)
    {
        $this->titre_texte = $titre_texte;

        return $this;
    }

    /**
     * Obtenir la valeur de sous_titre_texte
     */ 
    public function getSous_titre_texte()
    {
        return $this->sous_titre_texte;
    }

    /**
     * Définir la valeur de sous_titre_texte
     *
     * @return  self
     */ 
    public function setSous_titre_texte($sous_titre_texte)
    {
        $this->sous_titre_texte = $sous_titre_texte;

        return $this;
    }

    /**
     * Obtenir la valeur de description_texte
     */ 
    public function getDescription_texte()
    {
        return $this->description_texte;
    }

    /**
     * Définir la valeur de description_texte
     *
     * @return  self
     */ 
    public function setDescription_texte($description_texte)
    {
        $this->description_texte = $description_texte;

        return $this;
    }
}