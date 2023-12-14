<?php
//@author Mathilde <mathilde..brx@gmail.com>

////////////////////////////////////////////////USER/////////////////////////////////////////////////////////////////////
//Methode qui renvoie la liste des users
 function readUsers() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `user`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listUsers = $stmt->fetchAll();
    return $listUsers;
}


//methode qui ajoute une personne dans la DB
function createUser($nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO user (NAME_USER, FIRSTNAME_USER, TEL, MAIL, PASSWORD) VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser]);
    }

//fonction qui vérifie que l'entrée ne contient que des lettres
function isAlpha ($str) {
 //>((string)str)-(bool)>
return preg_match('/^([a-zA-Zéèï]*)$/',$str);
}
//fonction qui vérifie que l'entrée ne contient que des chiffres
function isBeta ($str1) {
    //>((string)str)-(bool)>
   return preg_match('/^([0-9]*)$/',$str1);
   }


//fonction qui supprime une ligne de la DB
function deleteUser($idUser): void {
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
 function readPenalities() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `penality`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listPenalities = $stmt->fetchAll();
    return $listPenalities;
}


//methode qui ajoute une personne dans la DB
function createPenality($libellePenality, $pricePenality) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO penality (LIBELLE, PRICE) VALUES (?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$libellePenality, $pricePenality]);
    }


//fonction qui supprime une ligne de la DB
function deletePenality($idPenality): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM penality WHERE ID_PENALITY = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idPenality]);

}
//DB_Manager.class.php
//Met à jour une pénalité dans la DB.
public static updatePenality($id_Penality, $libelle, $price): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE penality SET LIBELLE = ?, PRICE = ? WHERE ID_PENALITY = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$libelle, $price, $id_Penality]);
    }
////////////////////////////////////////////////DEBT/////////////////////////////////////////////////////////////////////



//Methode qui renvoie la liste des debts
function readDebts() : array {
    //driver vers la DB
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt = $bdd->prepare("SELECT * FROM `debt`; ");
    $stmt->execute();
    //rapatrie toutes les lignes de la table
    $listDebts = $stmt->fetchAll();
    return $listDebts;
}


//methode qui ajoute une personne dans la DB
function createDebt($firstnameUser, $libellePenality, $details) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO debt (ID_USER, LIBELLE, DETAIL) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$firstnameUser, $libellePenality, $details]);
    }


//fonction qui supprime une ligne de la DB
function deleteDebt($nbDebt): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM debt WHERE NB_DEBT = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$nbDebt]);
    }



    //function qui filtre les dettes par id utilisateur
    function filtrerDebt() : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `debt` WHERE ID_USER = ? ; ");
        $stmt->execute();
        //rapatrie toutes les lignes de la table
        $listDebts = $stmt->fetchAll();
        return $listDebts;
    }

?>