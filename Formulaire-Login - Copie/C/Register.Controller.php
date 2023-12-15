<?php
// Inclure la classe Database
include '..\M\register.php';

// Instancier la classe Database
$database = new Register('localhost', 'game_of_fraudes', 'utf8mb4', 'root', '');

// Récupérer les données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Insérer l'utilisateur dans la base de données
$database->insertUser($email, $password);

// Fermer la connexion à la base de données
$database->closeConnection();
?>
