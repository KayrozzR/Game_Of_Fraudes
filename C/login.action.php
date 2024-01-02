<?php
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";


$_SESSION['userList'] = DB_Manager::readUsers();
$_SESSION['penalityList'] = DB_Manager::readPenalities();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $Inputemail = $_POST['email'];
    $Inputpassword = $_POST['password'];
    
    if (trim($_POST['email'])&&trim($_POST['password'])== !NULL) {
        if(DB_Manager::login($mailUser, $passwordUser)){
            $_SESSION["autoriser"] = "oui";
            $user = (DB_Manager::readUsers($Inputemail)[0]);
            $_SESSION["userGiver"] = new User ($user["Name_User"],$user["Firstname_User"],$user["Tel"],$user["Mail"],$user["password"]);
            $_SESSION["ID_userGiver"] = $user ["ID_User"];

            $_SESSION["Name_User"];
            $_SESSION["Firstname_User"];
            $_SESSION["Tel"];
            $_SESSION["Mail"];
        }
    }
    $authentication = DB_Manager::login($Inputemail, $Inputpassword);
    
    header("Location:../V/index.php");
}
else {
    header('Location:../V/error.php');
}



?>