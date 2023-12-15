<?php
session_start();

include_once '../M/DB_Manager.class.php'; 
include_once '../M/Penality.class.php';

DB_Manager::updatePenality(1, "retard");
?>


