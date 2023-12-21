<?php

/** @author Mathilde <mathilde.brx@gmail.com> */
session_start();

include_once "../M/DB_Manager.class.php";
include_once "../M/Debt.class.php";

$_SESSION["user"] = DB_Manager::filtrerDebt();


header("Location:../V/historicDebt.php");
