<?php
/*@author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

//création d'un nouvel utilisateur à insérer dans la base de donnée

$nameUser = $_POST["Name_User"];
$firstnameUser = $_POST["FirstName_User"];
$telUser = $_POST["Tel"];
$mailUser = $_POST["Mail"];
$passwordUser = $_POST["password"];
$user1 = new User ($nameUser,$firstnameUser,$telUser,$mailUser,$passwordUser );

//vérification des conditions avant de créer: name et firstname composés uniquement de lettres, tel composé uniquement de chiffres. 
if(DB_Manager::isAlpha($nameUser) && DB_Manager::isAlpha($firstnameUser) && DB_Manager::isBeta($telUser)) {
  DB_Manager::createUser($user1);
  } else {
	echo "ERROR";
  }


header("Location:../V/");
?>