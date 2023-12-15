<?php
// logout.php
session_start();
session_destroy(); // Détruire la session

// Rediriger vers la page d'accueil après la déconnexion
header('Location: index.php');
exit();
?>
