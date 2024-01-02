<?php
session_start();
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupérer les données du formulaire
  $Inputemail = $_POST['email'];
  $Inputpassword = $_POST['password'];
        $user = (DB_Manager::readUsers($Inputemail)[0]);
            $_SESSION["userGiver"] = new User ($user["Name_User"],$user["Firstname_User"],$user["Tel"],$user["Mail"],$user["password"]);
            $_SESSION["ID_userGiver"] = $user ["ID_User"];

            $_SESSION["Name_User"];
            $_SESSION["Firstname_User"];
            $_SESSION["Tel"];
            $_SESSION["Mail"];
}

$userGiverId = $_SESSION['user_id'];
$userGiver = DB_Manager::readUserById($userGiverId);
  // $idUser = $_POST["ID_User"];
  //$nameUser = $_POST["Name_User"];
 // $firstnameUser = $_POST["FirstName_User"];
  // $telUser = $_POST["Tel"];
  // $mailUser = $_POST["Mail"];
//   $passwordUser =$_POST["password"];
  //DB_Manager::updateUser_Name($nameUser,$idUser);
 // DB_Manager::updateUser_Firstname($firstnameUser,$idUser);
  DB_Manager::updateUser_Mail($mailUser);
  DB_Manager::updateUser_Tel($telUser);


