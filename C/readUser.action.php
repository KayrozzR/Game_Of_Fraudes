<?php
/** @author Mathilde <mathilde.brx@gmail.com> */ 
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

$listUsers = DB_Manager::readUsers();


header("Location:../V/");
?>