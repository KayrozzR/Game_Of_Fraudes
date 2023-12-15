<?php
 session_start();
// Vérifier si le formulaire de connexion est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $Inputemail = $_POST['email'];
    $Inputpassword = $_POST['password'];

    // Inclure le fichier avec la fonction d'authentification
    include '..\M\register.php';

    // Appeler la fonction d'authentification
    Login($Inputemail, $Inputpassword);
}
?>
