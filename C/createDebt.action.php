<?php
session_start();


include_once "../M/User.class.php";
include_once "../M/Penality.class.php";
include_once "../M/Debt.class.php";
include_once "../M/DB_Manager.class.php";

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    echo "Vous devez être connecté pour dénoncer une dette.";
    exit();
}

// Récupérez l'expéditeur (utilisateur connecté) depuis la session
$userGiverId = $_SESSION['user_id'];
$userGiver = DB_Manager::readUserById($userGiverId);

// Récupérer l'ID de l'utilisateur destinataire depuis le formulaire
$idReceiver = isset($_POST['idReceiver']) ? intval($_POST['idReceiver']) : 0;

// Récupérer l'objet User correspondant à l'ID de l'utilisateur destinataire
$userReceiver = DB_Manager::readUserById($idReceiver);

// Vérifier si l'utilisateur destinataire a été correctement récupéré
if (!$userReceiver) {
    echo "Erreur lors de la récupération de l'utilisateur destinataire.";
    exit();
}

// Récupérer le reste des données du formulaire


$libelle = $_POST['Libelle'];
$penality = DB_Manager::readPenality($libelle);


// Vérifier que la pénalité a été correctement récupérée
if (!$penality) {
    echo "Erreur lors de la récupération de la pénalité.";
    
    exit();
}

$date = date("Y-m-d H:i:s");
$status = true; // Par défaut, vous pouvez ajuster cela en fonction de votre logique
$detail = $_POST['Detail'];

// Créer un objet Debt en utilisant les objets User et Penality récupérés
$debt = new Debt(
    null, // ou l'ID de la dette s'il est disponible, sinon null
    $userGiver,
    $userReceiver,
    $penality,
    $date,
    $status,
    $detail,
    $libelle,
 
);


// Enregistrer la dette dans la base de données
DB_Manager::createDebt($debt);

// DB_Manager::addCptDenounce($userGiver);

$_SESSION["debt"] = DB_Manager::readDebts();
header("Location:../V/debtHistorique.php");
?>