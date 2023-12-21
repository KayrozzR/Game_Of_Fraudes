<?php
session_start();
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

  $idUser = $_POST["ID_User"];
  $nameUser = $_POST["Name_User"];
  $firstnameUser = $_POST["FirstName_User"];
  $telUser = $_POST["Tel"];
  $mailUser = $_POST["Mail"];
//   $passwordUser =$_POST["password"];
  DB_Manager::updateUser_Name($nameUser,$idUser);
  DB_Manager::updateUser_Firstname($firstnameUser,$idUser);
  DB_Manager::updateUser_Mail($mailUser,$idUser);
  DB_Manager::updateUser_Tel($telUser,$idUser);


