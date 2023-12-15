<?php

session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Debt.class.php";
include_once "../M/Penality.class.php";
include_once "../M/User.class.php";


$userGiver = new User(1,"Ricky","Richard","0215489652","test@exemple.com","1241");
$idReceiver = new User(2,"Jean","Mouloud","0215489652","dmskdls@live.fr","1244");
$penality = new Penality(1,"retard",1);
// $date = $_POST["Date"];
$date = "15/12/2023";
// $detail = $_POST["detal"]
$status = $_POST["Status"];

$debt = new Debt ($userGiver,$idReceiver,$penality,$date,$status);

DB_Manager::createDebt($debt);