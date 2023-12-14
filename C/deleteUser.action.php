<?php
/*@author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

//suppression d'un user par l'ID
$idUser= $_POST ["ID_User"];
DB_Manager::deleteUser($idUser);

//relecture de la table user après suppression
$listUsers = DB_Manager::readUsers();

header("Location:../V/");
?>