<?php

namespace App\Models;

use App\DB\Database;

    class Model extends Database {
        protected $connection;
        protected $table;
    
        // Le constructeur pour initialiser la connexion à la base de données et la table
        public function __construct() {
            $this->connection = Database::getInstance();
        }
    
        // CREATE: Insertion de données dans la base de données
        public function create($data) {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));
    
            $query = "INSERT INTO " . $this->table . " ($columns) VALUES ($values)";
            $statement = $this->connection->prepare($query);
    
            // Boucle pour lier les valeurs
            foreach ($data as $key => &$val) {
                $statement->bindParam(":$key", $val);
            }
    
            return $statement->execute();
        }
    
        // READ: Récupérer toutes les données
        public function read() {
            $query = "SELECT * FROM " . $this->table;
            $statement = $this->connection->prepare($query);
            $statement->execute();
    
            return $statement->fetchAll();
        }
    
        // READ: Récupérer une ligne spécifique par ID
        public function readOne(int $id) {
            $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(":id", $id);
            $statement->execute();
    
            return $statement->fetch();
        }
    
        // UPDATE: Mettre à jour une ligne spécifique par ID
        public function update($id, $data) {
            $fields = "";
            foreach ($data as $key => $value) {
                $fields .= "$key = :$key, ";
            }
            $fields = rtrim($fields, ", ");
    
            $query = "UPDATE " . $this->table . " SET $fields WHERE id = :id";
            $statement = $this->connection->prepare($query);
    
            // Boucle pour lier les valeurs
            foreach ($data as $key => &$val) {
                $statement->bindParam(":$key", $val);
            }
            $statement->bindParam(":id", $id);
    
            return $statement->execute();
        }
    
        // DELETE: Supprimer une ligne spécifique par ID
        public function delete($id) {
            $query = "DELETE FROM " . $this->table . " WHERE id = :id";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(":id", $id);
    
            return $statement->execute();
        }
    }

?>