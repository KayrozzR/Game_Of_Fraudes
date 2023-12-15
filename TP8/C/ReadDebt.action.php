<?php
session_start();

include_once '../M/DB_Manager.class.php'; 
include_once '../M/Debt.class.php';

$listDebts = DB_Manager::readDebts();

header("Location:../V/");
?>