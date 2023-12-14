<?php
/*@author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Penality.class.php";

$libelle = $_POST["Libelle"];
$price = $_POST["Price"];
$penality1 = new Penality ($libelle, $price);

DB_Manager::createPenality($penality1);

 //read penality table
$listPenalities = DB_Manager::readPenalities();


header("Location:../V/");
?>