<?php

namespace Admin\Controllers;

use App\Controllers\Controller;
use App\Models\ImageModel;

class ImagesController extends Controller {

    public function index() {

        $image = new ImageModel;

        $images = [
            'home' => array_filter([
                $image->readOne(12),
                $image->readOne(32),
                $image->readOne(30),
                $image->readOne(27),
                $image->readOne(2),
                $image->readOne(29)
            ]),
            'lodge' => array_filter([
                $image->readOne(31),
                $image->readOne(5),
                $image->readOne(15),
                $image->readOne(13),
                $image->readOne(11),
                $image->readOne(7),
                $image->readOne(20),
                $image->readOne(19),
                $image->readOne(9),
                $image->readOne(21),
                $image->readOne(22),
                $image->readOne(10)
            ]),
            'tourism' => array_filter([
                $image->readOne(1),
                $image->readOne(17),
                $image->readOne(4),
                $image->readOne(16),
                $image->readOne(3),
                $image->readOne(24),
                $image->readOne(18),
                $image->readOne(6),
                $image->readOne(8)
            ]),
            'contact' => array_filter([
                $image->readOne(28)
            ]),
            'booking' => array_filter([
                $image->readOne(14)
            ]),
            'copy' => array_filter([
                $image->readOne(23)
            ]),
        ];
    
        require_once "admin/Views/images.php";
    }

    // Méthode pour traiter la modification d'image 
    public function update($id) {

        $imageModel = new ImageModel;
    
        $image = $imageModel->readOne($id);
    
        if (!$image) {
            header("Location: /admin/Images/index");
            exit;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'nom_image' => $_POST['nom_image'],
            ];
    
            // Si une nouvelle image est téléchargée, gérez son téléchargement
            if (!empty($_FILES['new_image']['name'])) {
                $uploadDir = '/public/assets/images/';
                $uploadFile = $uploadDir . basename($_FILES['new_image']['name']);
    
                // Vérifiez si le téléchargement a réussi
                if (move_uploaded_file($_FILES['new_image']['tmp_name'], $uploadFile)) {
                    $data['nom_image'] = $_FILES['new_image']['name'];
                } else {
                    $_SESSION['error'] = "Erreur lors du téléchargement de la nouvelle image.";
                }
            }
    
            // Enregistrez les modifications en passant l'ID et les données
            $imageModel->update($id, $data);
            header("Location: /admin/Images/index");
            exit;
        }
        include "admin/Views/updateImage.php";
    }
        
    // Méthode pour traiter la suppression d'image
    public function delete($id) {
        $image = new ImageModel;
        $delete = $image->delete($id);

        if ($delete) {
            header('Location:/admin/Images/index');
            exit;
        } else {
            echo "Erreur lors de la suppression de l'image.";
        }
    }
}