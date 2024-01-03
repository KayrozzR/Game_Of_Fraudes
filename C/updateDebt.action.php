<?php
session_start();
include_once "../M/DB_Manager.class.php";
include_once "../M/Debt.class.php";

$idDebt = $_POST["ID_Penality"];
$status = $_POST["Libelle"];

DB_Manager::updateDebt($status,$idDebt);