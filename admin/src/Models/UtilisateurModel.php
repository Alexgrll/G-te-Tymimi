<?php

namespace Admin\Models;

use App\Models\Model;

class UtilisateurModel extends Model {

    protected $nom_utilisateur;
    protected $prenom_utilisateur;
    protected $email_utilisateur;
    protected $telephone_utilisateur;
    protected $mdp_utilisateur;
    protected $id_role_utilisateur;

    public function __construct() {
        parent::__construct();
        $this->table = 'utilisateurs';
    }

    // Fonction pour joindre la table rôles
    public function readAll() {
        $query = "SELECT utilisateurs.*, roles.nom_role FROM {$this->table} JOIN roles ON roles.id = utilisateurs.id_role_utilisateur";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        
        return $statement->fetchAll();
    }

    // Fonction pour joindre la table rôles sur un utilisateur
    public function readOne(int $id) {
        $query = "SELECT utilisateurs.*, roles.nom_role FROM {$this->table} JOIN roles ON roles.id = utilisateurs.id_role_utilisateur WHERE utilisateurs.id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();

        return $statement->fetch();
    }

    /**
     * Obtenir la valeur de nom_utilisateur
     */ 
    public function getNom_utilisateur()
    {
        return $this->nom_utilisateur;
    }

    /**
     * Définir la valeur de nom_utilisateur
     *
     * @return  self
     */ 
    public function setNom_utilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    /**
     * Obtenir la valeur de prenom_utilisateur
     */ 
    public function getPrenom_utilisateur()
    {
        return $this->prenom_utilisateur;
    }

    /**
     * Définir la valeur de prenom_utilisateur
     *
     * @return  self
     */ 
    public function setPrenom_utilisateur($prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    /**
     * Obtenir la valeur de email_utilisateur
     */ 
    public function getEmail_utilisateur()
    {
        return $this->email_utilisateur;
    }

    /**
     * Définir la valeur de email_utilisateur
     *
     * @return  self
     */ 
    public function setEmail_utilisateur($email_utilisateur)
    {
        $this->email_utilisateur = $email_utilisateur;

        return $this;
    }

    /**
     * Obtenir la valeur de telephone_utilisateur
     */ 
    public function getTelephone_utilisateur()
    {
        return $this->telephone_utilisateur;
    }

    /**
     * Définir la valeur de telephone_utilisateur
     *
     * @return  self
     */ 
    public function setTelephone_utilisateur($telephone_utilisateur)
    {
        $this->telephone_utilisateur = $telephone_utilisateur;

        return $this;
    }

    /**
     * Obtenir la valeur de id_role_utilisateur
     */ 
    public function getId_role_utilisateur()
    {
        return $this->id_role_utilisateur;
    }

    /**
     * Définir la valeur de id_role_utilisateur
     *
     * @return  self
     */ 
    public function setId_role_utilisateur($id_role_utilisateur)
    {
        $this->id_role_utilisateur = $id_role_utilisateur;

        return $this;
    }
}