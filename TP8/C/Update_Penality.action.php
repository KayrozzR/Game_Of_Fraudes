<?php


include_once '../M/DB_Manager.class.php'; 
include_once '../M/Penality.class.php';


$idPenalityToUpdate = 1; 
$newLibelle = "Nouveau libellé";
$newPrice = 19.99;

DB_Manager::updateUser_Name($nameUser,$idUser);
DB_ManagerupdatePenality($idPenalityToUpdate, $newLibelle, $newPrice);


echo 'La pénalité a été mise à jour avec succès.';
?>
  

?>


