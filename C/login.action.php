<?php
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";

/*
// Vérifier si le formulaire de connexion est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $Inputemail = $_POST['email'];
    $Inputpassword = $_POST['password'];


$authentication = DB_Manager::login($Inputemail, $Inputpassword);

}
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $Inputemail = $_POST['email'];
    $Inputpassword = $_POST['password'];
    
    // if (trim($_POST['email'])&&trim($_POST['password'])== !NULL) {
    //     if(DB_Manager::login($Inputemail, $Inputpassword)){
    //         $_SESSION["autoriser"] = "oui";
    //         $user = (DB_Manager::readUserConnect($Inputemail)[0]);
    //         $_SESSION["userGiver"] = new User ($user["Name_User"],$user["Firstname_User"],$user["Tel"],$user["Mail"],$user["password"]);
    //         $_SESSION["ID_userGiver"] = $user ["ID_User"];
    //         $_SESSION["Prenom"] = $user["Firstname_User"];
    //         $_SESSION["Nom"] = $user["Name_User"];
    //     }
    // }
     $authentication = DB_Manager::login($Inputemail, $Inputpassword);
    
    header("Location:../V/index.php");
}
else {
    header('Location:../V/error.php');
}

$Inputemail = $_POST['email'];
$_SESSION["recup"] = DB_Manager::readUserConnect($Inputemail);

?>