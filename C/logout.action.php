<?php
session_start();
include_once "../M/DB_Manager.class.php";


$authentication = DB_Manager::logout();
header("Location:../V/status.php");
?>