<?php
session_start();
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";
include_once "../M/Debt.class.php";

$_SESSION["debt"]= DB_Manager::readDebts();
  // $idUser = $_POST["ID_User"];
  //$nameUser = $_POST["Name_User"];
 // $firstnameUser = $_POST["FirstName_User"];
//   $statusUser = $_POST["Status"];
//   $passwordUser =$_POST["password"];
  //DB_Manager::updateUser_Name($nameUser,$idUser);
 // DB_Manager::updateUser_Firstname($firstnameUser,$idUser);;

  DB_Manager::updateDebt($_POST["idDebt"]);

  // $Inputemail = $_POST['email'];
  $_SESSION["debt"]= DB_Manager::readDebts();
 header("Location:../V/debtHistorique.php");

?>
