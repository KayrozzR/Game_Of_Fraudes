<?php

// traitement_recuperation_mot_de_passe.php
$email = $_POST['email'];

// Vérifier si l'e-mail existe dans la base de données

// Générer un jeton unique
$token = bin2hex(random_bytes(32));

// Enregistrer le jeton et l'expiration dans la base de données

// Envoyer un e-mail avec le lien de réinitialisation
$lien_reset = "http://www.example.com/reset_mot_de_passe.php?token=$token";
$message = "Cliquez sur le lien suivant pour réinitialiser votre mot de passe : $lien_reset";
mail($email, "Réinitialisation du mot de passe", $message);


?>