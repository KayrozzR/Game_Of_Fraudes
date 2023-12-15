<?php

class DB_Manager {
////////////////////////////////////////////////USER/////////////////////////////////////////////////////////////////////
/** @author Mathilde <mathilde.brx@gmail.com>*/
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

/** @author Mathilde <mathilde.brx@gmail.com>*/
//methode qui ajoute une personne dans la DB
public static function createUser(User $user) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO user (NAME_USER, FIRSTNAME_USER, TEL, MAIL, PASSWORD) VALUES (?,?,?,?,?)";
    $hashedPassword = password_hash($user->getPasswordUser(), PASSWORD_DEFAULT);
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$user->getNameUser(),$user->getFirstnameUser(),$user->getTelUser(),$user->getMailUser(),$hashedPassword ]);
}
/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui vérifie que l'entrée ne contient que des lettres
public static function isAlpha ($str) {
    //>((string)str)-(bool)>
    return preg_match('/^([a-zA-Zéèï]*)$/',$str);
}
/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui vérifie que l'entrée ne contient que des chiffres
public static function isBeta ($str1) {
    //>((string)str)-(bool)>
   return preg_match('/^([0-9]*)$/',$str1);
}
/** @author Simon  */
public static function login($Inputemail, $Inputpassword) {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $stmt= $bdd ->prepare("SELECT * FROM user WHERE Mail = ?");
    $stmt->execute([$Inputemail]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier le mot de passe
    if ($user && password_verify($Inputpassword, $user['Password'])) {

        session_start();  // Démarrer la session

        // Stocker des informations utiles dans la session
        $_SESSION['user_id'] = $user['ID_User'];
        $_SESSION['user_email'] = $user['Mail'];

        // Authentification réussie
        echo "Authentification réussie. Bienvenue, " . $user['Mail'];
    } else {
        // Authentification échouée
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
}

public static function closeConnection()
{
    $this->pdo = null;
}

/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui supprime une ligne de la DB
public static function deleteUser( $idUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM user WHERE ID_USER = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idUser]);
}


////////////////////////////////////////////////PENALITY/////////////////////////////////////////////////////////////////////
/** @author Mathilde <mathilde.brx@gmail.com>*/
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

/** @author Mathilde <mathilde.brx@gmail.com>*/
//methode qui ajoute une personne dans la DB
public static function createPenality(Penality $penality) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO penality (LIBELLE, PRICE) VALUES (?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$penality->getLibelle(), $penality->getPrice()]);
    }

/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui supprime une ligne de la DB
public static function deletePenality($idPenality): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM penality WHERE ID_PENALITY = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idPenality]);
    }


////////////////////////////////////////////////DEBT/////////////////////////////////////////////////////////////////////    
/** @author Mathilde <mathilde.brx@gmail.com>*/
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

/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui supprime une ligne de la DB
public static function deleteDebt($nbDebt): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "DELETE FROM debt WHERE NB_DEBT = ? ";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$nbDebt]);
}


/** @author Mathilde <mathilde.brx@gmail.com>*/
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

/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui ajoute 1 au compteur dénounce d'un user 
public static function addCptDenounce($IDUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE user SET Cpt_Denonce = +1 WHERE ID_USER = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$IDUser]);
}


/** @author Simon <simon-loro@live.fr>*/





}

?>