<?php
include_once "../M/DB_Manager.class.php";
include_once "../M/User.class.php";



// Vérifier si le formulaire de connexion est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $Inputemail = $_POST['Mail'];
    $Inputpassword = $_POST['password'];


$authentication = DB_Manager::login($Inputemail, $Inputpassword);

}
?>