<?php
// Inclure le fichier UserController.php
include_once "../M/DB_Manager.class.php";

// Appel de la fonction de déconnexion
$logout = DB_Manager::logout();

header("Location:../V/status.php");
?>
