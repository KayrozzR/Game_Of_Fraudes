<?php
include_once "../M/DB_Manager.class.php";
include_once "../M/Penality.class.php";

$id_Penality = $_POST["ID_Penality"];
$libelle = $_POST["Libelle"];
$Price = $_POST["Price"];

DB_Manager::updatePenality_Libelle($libelle,$id_Penality);
DB_Manager::updatePenality_Price($Price,$id_Penality);