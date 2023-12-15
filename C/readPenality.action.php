<?php
/** @author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Penality.class.php";

 //read penality table
$listPenalities = DB_Manager::readPenalities();


header("Location:../V/");
?>