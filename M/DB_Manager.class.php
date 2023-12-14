<?php
//@author Mathilde <mathilde..brx@gmail.com>
class DB_Manager {
////////////////////////////////////////////////USER/////////////////////////////////////////////////////////////////////
//Methode qui renvoie la liste des users
 public static function readUsers() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `user`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listUsers = $stmt->fetchAll();
    return $listUsers;
}


//methode qui ajoute une personne dans la DB
public static function createUser(User $user) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO user (NAME_USER, FIRSTNAME_USER, TEL, MAIL, PASSWORD) VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$user->getNameUser(),$user->getFirstnameUser(),$user->getTelUser(),$user->getMailUser(), $user->getPasswordUser() ]);
    }

//fonction qui vérifie que l'entrée ne contient que des lettres
public static function isAlpha ($str) {
 //>((string)str)-(bool)>
return preg_match('/^([a-zA-Zéèï]*)$/',$str);
}
//fonction qui vérifie que l'entrée ne contient que des chiffres
public static function isBeta ($str1) {
    //>((string)str)-(bool)>
   return preg_match('/^([0-9]*)$/',$str1);
   }


//fonction qui supprime une ligne de la DB
public static function deleteUser( $idUser): void {
$bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
$sql = "DELETE FROM user WHERE ID_USER = ? ";
$stmt= $bdd->prepare($sql);
$stmt->execute([$idUser]);
}

 /*  // fonction qui modifie une donnée de la DB
function updateUser($nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser, $idUser): void {
$bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
$sql = "UPDATE user SET FIRSTNAME_USER = ? WHERE ID_USER = ?";
$stmt= $bdd->prepare($sql);
$stmt->execute([$nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser, $idUser]);
}
*/

////////////////////////////////////////////////PENALITY/////////////////////////////////////////////////////////////////////
//Methode qui renvoie la liste des penalities
public static function readPenalities() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `penality`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listPenalities = $stmt->fetchAll();
    return $listPenalities;
}


//methode qui ajoute une personne dans la DB
public static function createPenality(Penality $penality) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO penality (LIBELLE, PRICE) VALUES (?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$penality->getLibelle(), $penality->getPrice()]);
    }


//fonction qui supprime une ligne de la DB
public static function deletePenality($idPenality): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM penality WHERE ID_PENALITY = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idPenality]);
    }


////////////////////////////////////////////////DEBT/////////////////////////////////////////////////////////////////////    

//Methode qui renvoie la liste des debts
public static function readDebts() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `debt`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listDebts = $stmt->fetchAll();
    return $listDebts;
}


//methode qui ajoute une personne dans la DB
public static function createDebt($firstnameUser, $libellePenality, $details) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO debt (ID_USER, LIBELLE, DETAIL) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$firstnameUser, $libellePenality, $details]);
    }


//fonction qui supprime une ligne de la DB
public static function deleteDebt($nbDebt): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM debt WHERE NB_DEBT = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$nbDebt]);
    }



//function qui filtre les dettes par id utilisateur
public static function filtrerDebt() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `debt` WHERE ID_USER = ? ; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listDebts = $stmt->fetchAll();
    return $listDebts;
    }
}
?>