<?php
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";
include_once "../M/Penality.class.php";
include_once "../M/Debt.class.php";

/*
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

//récupération du tableau user de la base de donnée
$listUsers = DB_Manager::readUsers();
print_r($listUsers);



$idUser= $_POST ["ID_User"];
DB_Manager::deleteUser($idUser);


//Create new penality

$libelle = $_POST["Libelle"];
$price = $_POST["Price"];
$penality1 = new Penality ($libelle, $price);
print_r($penality1);
DB_Manager::createPenality($penality1);






//delete line in penality table from id
$idPenality = $_POST["ID_Penality"];
DB_Manager::deletePenality($idPenality);
*/


 //read penality table
$listPenalities = DB_Manager::readPenalities();






?>