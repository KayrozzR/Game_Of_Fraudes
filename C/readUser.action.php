<?php
/** @author Ricky */
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

$_SESSION["userList"] = DB_Manager::readUsers();


header("Location:../V/usersList.php");
