<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$response = ['success' => false, 'errors' => []];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $telephone = isset($_POST['telephone']) ? htmlspecialchars(trim($_POST['telephone'])) : '';
    $sujet = isset($_POST['sujet']) ? htmlspecialchars(trim($_POST['sujet'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $consent = isset($_POST['consent']) ? $_POST['consent'] : '';

    // Validation des champs
    if (empty($nom)) {
        $response['errors']['nom'] = "Le nom est requis.";
    }

    if (empty($prenom)) {
        $response['errors']['prenom'] = "Le prénom est requis.";
    }

    if (empty($email)) {
        $response['errors']['email'] = "L'email est requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors']['email'] = "L'email est invalide.";
    }

    if (empty($message)) {
        $response['errors']['message'] = "Le message est requis.";
    }

    if (empty($consent)) {
        $response['errors']['consent'] = "Vous devez accepter les termes.";
    }

    if (empty($response['errors'])) {
       
        $to = '';

        $subject = 'Nouveau message de contact de ' . $nom . ' ' . $prenom;

        $body = "<p>Bonjour,</p>";
        $body .= "<p>Vous avez reçu un nouveau message de votre site web Gîte Tymimi.</p>";
        $body .= "<p><strong>Informations du visiteur :</strong></p>";
        $body .= "<ul>";
        $body .= "<li><p><strong>Nom:</strong> $nom</p></li>";
        $body .= "<li><p><strong>Prénom:</strong> $prenom</p></li>";
        $body .= "<li><p><strong>Email:</strong> $email</p></li>";
        if (trim($telephone)) {
          $body .= "<li><p><strong>Téléphone:</strong> $telephone</p></li>";
        }
        $body .= "</ul>";
        $body .= "<p><strong>Détail du message :</strong></p>";
        if (trim($sujet)) {
            $body .= "<p><strong>Sujet:</strong> $sujet</p>";
        }
        $body .= "<p>$message</p>";

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom($email, $nom . ' ' . $prenom);
            $mail->addReplyTo($email, $nom . ' ' . $prenom);
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;

            $mail->send();

            $response['success'] = true;

        } catch (Exception $e) {
            $response['errors']['mail'] = 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.';
        }
    }
}

echo json_encode($response);
?>