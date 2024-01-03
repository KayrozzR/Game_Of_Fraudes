<?php

/** @author Mathilde <mathilde.brx@gmail.com> */
session_start();

include_once "../M/User.class.php";
include_once "../M/Penality.class.php";
include_once "../M/Debt.class.php";
include_once "../M/DB_Manager.class.php";

//read penality table
$_SESSION["penality"] = DB_Manager::readPenalities();
$_SESSION["debt"] = DB_Manager::readDebts();
$_SESSION["userList"] = DB_Manager::readUsers();

header("Location:../V/penalityForm.php");