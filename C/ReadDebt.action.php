<?php
/** @author Tina */
session_start();

include_once '../M/DB_Manager.class.php'; 
include_once '../M/Debt.class.php';

$_SESSION["debt"] = DB_Manager::readDebts();

header("Location:../V/debtHistorique.php");
?>