<?php
session_start();
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

foreach ($_SESSION["recup"] as $key) {
  $idUser = $key["ID_User"];
  $mailUser = $key["MAIL"];
}


  // $idUser = $_POST["ID_User"];
  //$nameUser = $_POST["Name_User"];
 // $firstnameUser = $_POST["FirstName_User"];
  $telUser = $_POST["Tel"];
//   $passwordUser =$_POST["password"];
  //DB_Manager::updateUser_Name($nameUser,$idUser);
 // DB_Manager::updateUser_Firstname($firstnameUser,$idUser);;
  DB_Manager::updateUser_Tel($telUser,$idUser);

  // $Inputemail = $_POST['email'];
  $_SESSION["recup"]= DB_Manager::readUserConnect($mailUser) ;

  header("Location:../V/Profil.php");