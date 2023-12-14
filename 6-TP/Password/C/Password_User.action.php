<?php
include "..\M\User.class.php";

$user = new User ("Richard","Ricky","0665415422","rickyrichard2205@gmail.com","1234");
$user->createUser();


header('Location: ../V/Subscribe_User.php');