<?php
/*@author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Penality.class.php";

//delete line in penality table from id
$idPenality = $_POST["ID_Penality"];
DB_Manager::deletePenality($idPenality);

 //read penality table
$listPenalities = DB_Manager::readPenalities();


header("Location:../V/");
?>