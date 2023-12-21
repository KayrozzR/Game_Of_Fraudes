<?php
/** @author Ricky */
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Debt.class.php";
include_once "../M/Penality.class.php";
include_once "../M/User.class.php";


// ,$nameUser = $_POST["Name_User"],$firstnameUser = $_POST["FirstName_User"],$telUser = $_POST["Tel"],$mailUser = $_POST["Mail"],$passwordUser = $_POST["password"]
// $libelle = $_POST["Libelle"],$Price = $_POST["Price"]
// $idUser = $_POST["ID_User"];
// $nameUser = $_POST["Name_User"];
// $firstnameUser = $_POST["FirstName_User"];
// $telUser = $_POST["Tel"];
// $mailUser = $_POST["Mail"];
// $passwordUser = $_POST["password"];
// $id_Penality = $_POST["ID_Penality"];
// $libelle = $_POST["Libelle"];
// $Price = $_POST["Price"];

$userGiver = new User(DB_Manager::readUser($_POST["Firstname_User"]));
$idReceiver = new User(DB_Manager::readUser($_POST["Firstname_User"]));
$penality = new Penality(DB_Manager::readPenalitie($_POST["Libelle"]));
$date = new DateTime();
// $date = "15/12/2023";
// $detail = $_POST["detal"]
$status = $_POST["Status"];

$debt = new Debt ($userGiver,$idReceiver,$penality,$date,$status);

DB_Manager::createDebt($debt);

header("Location:../V/Update_User.php/");