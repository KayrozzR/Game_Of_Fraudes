<?php
/*
if (isset($_POST['envoyerEmail'])) {
    // Remplacez ces valeurs par les vôtres
    $destinataire = "loro-simon@live.fr";
    $sujet = "Sujet de l\'e-mail";
    $corps_message = "Ceci est un exemple de message automatique.";
    $headers= "From: lorosimonpro@gmail.com";
    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps_message, $headers)) {
        echo 'E-mail envoyé avec succès !';
    } else {
        echo 'Erreur lors de l\'envoi de l\'e-mail.';
    }
} else {
    echo 'Erreur : Le formulaire n\'a pas été soumis correctement.';
}
*/


require '../Composer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Paramètres SMTP de Gmail
$smtpHost = "smtp.gmail.com";
$smtpUsername = "lorosimonpro@gmail.com";
$smtpPassword = "umtp tals sewj vixh";
$smtpPort = 587; // Utilisez le port 465 avec SSL si cela ne fonctionne pas avec le port 587

// Destinataire
$toEmail = 'loro-simon@live.fr';
$subject = 'test';
$body = 'ceci est un test';

// Créez une instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls'; // Utilisez 'ssl' si vous utilisez le port 465 avec SSL
    $mail->Port = $smtpPort;

    // Destinataire
    $mail->setFrom($smtpUsername, 'Simon');
    $mail->addAddress($toEmail);

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Envoyer l'e-mail
    $mail->send();
    echo 'E-mail envoyé avec succès';
} catch (Exception $e) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
}
?>


