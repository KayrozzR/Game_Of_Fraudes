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
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
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
    $sql = "DELETE FROM penality WHERE ID_PENALITY =? " ;
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

public static function updateUser_Name($nameUser,$idUser): void {
        $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
        $sql = "UPDATE user SET Name_User = ? WHERE ID_User = ?";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$nameUser,$idUser]);
        }

public static function updateUser_Firstname($firstnameUser,$idUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE user SET FirstName_User = ? WHERE ID_User = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$firstnameUser,$idUser]);
    }

public static function updateUser_Mail($mailUser,$idUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE user SET Mail = ? WHERE ID_User = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$mailUser,$idUser]);
    }

public static function updateUser_Tel($telUser,$idUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE user SET Tel = ? WHERE ID_User = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$telUser,$idUser]);
    }

public static function updatePenality_Libelle($libelle, $id_Penality): void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE penality SET LIBELLE = ? WHERE ID_PENALITY = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$libelle, $id_Penality]);
    }

public static function updatePenality_Price($Price, $id_Penality): void {
        $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
        $sql = "UPDATE penality SET Price = ? WHERE ID_PENALITY = ?";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$Price, $id_Penality]);
        }

public static function updateDebt($status,$idDebt) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE debt SET `Status` = ? WHERE Nb_Debt = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$status, $idDebt]);
    }

public static function createDebt($debt) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO debt (`Date`, `Status`, `ID_Giver`, `ID_Receiver`, `ID_Penality`) VALUES
    (?,?,?,?,?);";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$debt->getDate(),$debt->getStatus(),$debt->getIdReceiver()->getIdUser(),$debt->getIdUser()->getIdUser(),$debt->getPenality()->getIdPenality()]); 
    }

    public static function readUser($firstnameUser) : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `user` WHERE Firstname_User = ?;");
        $stmt->execute($firstnameUser);
        //rapatrie toutes les lignes de la table
        $listUsers = $stmt->fetchAll();
        return $listUsers;
    }

    public static function readPenalitie($libelle) : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `penality` WHERE Libelle = ?; ");
        $stmt->execute($libelle);
        //rapatrie toutes les lignes de la table
        $listPenalities = $stmt->fetchAll();
        return $listPenalities;
    }

}


?>