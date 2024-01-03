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

public static function readUserConnect($mail) : array {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "SELECT NAME_USER, FIRSTNAME_USER, MAIL, TEL, Password, ID_User FROM user WHERE MAIL = ? ;";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$mail]);
    $tabUser = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $tabUser;
}

/** @author Mathilde <mathilde.brx@gmail.com>*/
//methode qui ajoute une personne dans la DB
public static function createUser(User $user) : void {       
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "INSERT INTO user (NAME_USER, FIRSTNAME_USER, TEL, MAIL, PASSWORD) VALUES (?,?,?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$user->getNameUser(),$user->getFirstnameUser(),$user->getTelUser(),$user->getMailUser(), $user->getPasswordUser() ]);
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
    $sql = "DELETE FROM penality WHERE ID_PENALITY =? " ;
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idPenality]);
    }


    ////////////////////////////////////////////////DEBT/////////////////////////////////////////////////////////////////////    
    /** @author Mathilde <mathilde.brx@gmail.com>*/
    //Methode qui renvoie la liste des debts
    public static function readDebts(): array
    {
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
    public static function deleteDebt($nbDebt): void
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $sql = "DELETE FROM debt WHERE NB_DEBT = ? ";
        $stmt = $bdd->prepare($sql);
        $stmt->execute([$nbDebt]);
    }


    /** @author Mathilde <mathilde.brx@gmail.com>*/
    //function qui filtre les dettes par id utilisateur
    public static function filtrerDebt(): array
    {
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

public static function updateDebt($idDebt) : void {
    $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE debt SET `Status` = 0 WHERE Nb_Debt = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$idDebt]);
    }

    public static function createDebt(Debt $debt): void
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO debt (`Date`,`Firstname_User`, `Status`, `Id_Denounce`, `Id_User`, `Id_Penality`, `Detail`, `Libelle`,`Price`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $bdd->prepare($sql);
        $stmt->execute([
            $debt->getDate(),
            $debt->getIdReceiver()->getFirstnameUser(),
            $debt->getStatus(),
            $debt->getIdUser()->getIdUser(),
            $debt->getIdReceiver()->getIdUser(),
            $debt->getPenality()->getIdPenality(),
            $debt->getDetail(),
            $debt->getPenality()->getLibelle(),
            $debt->getPenality()->getPrice(),
        ]);
    }
    // ...

    public static function readPenality($libelle): ?Penality
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `penality` WHERE LIBELLE = ?");
        $stmt->execute([$libelle]);
    
        $penalityData = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if (!$penalityData) {
            return null;
        }
    
        return new Penality($penalityData['Libelle'], $penalityData['Price'], $penalityData['ID_Penality']);
    }
    

// ...



    public static function readUser($firstnameUser) : array {
        //driver vers la DB
        $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `user` WHERE Firstname_User = ?; ");
        $stmt->execute([$firstnameUser]);
        //rapatrie toutes les lignes de la table
        $listUsers = $stmt->fetchAll();
        return $listUsers;
    }
    public static function readUserById($userId) {
        $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
        $stmt = $bdd->prepare("SELECT * FROM `user` WHERE ID_User = ?");
        $stmt->execute([$userId]);

        // Récupérer les données de l'utilisateur
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userData) {
            return null;
        }

        // Créer et retourner un objet User
        return new User(
            $userData['ID_User'],
            $userData['Name_User'],
            $userData['Firstname_User'],
            $userData['Tel'],
            $userData['Mail'],
            $userData['Password']
        );
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

/** @author Mathilde <mathilde.brx@gmail.com>*/
//fonction qui ajoute 1 au compteur dénounce d'un user 
public static function addCptDenounce($idUser): void {
    $bdd = new PDO('mysql:host=localhost;dbname=Game_of_fraudes;charset=utf8mb4', 'root', '');
    $sql = "UPDATE user SET CPT_DENONCE = +1 WHERE ID_USER = ?";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$idUser]);
}
////////////////////////////////////////LOGIN/LOGOUT/////////////////////////////////////////////////////////////////////
/** @author Simon <loro-simon@live.fr> */
public static function login($Inputemail, $Inputpassword) {
    try {
        // Établir la connexion à la base de données
        $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');

        // Préparer et exécuter la requête SQL pour récupérer l'utilisateur par son adresse e-mail
        $stmt = $bdd->prepare("SELECT * FROM user WHERE Mail = ?");
        $stmt->execute([$Inputemail]);

        // Récupérer les données de l'utilisateur
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe et comparer le mot de passe
        if ($row) {
            if (password_verify($Inputpassword, $row['Password'])) {
                // Démarrer la session
                session_start();

                // Stocker des informations utiles dans la session
                $_SESSION['user_id'] = $row['ID_User'];
                $_SESSION['user_Firstname'] = $row['Firstname_User'];
                $_SESSION['user_Name'] = $row['Name_User'];
                $_SESSION['user_Mail'] = $row['Mail'];
                $_SESSION['user_Tel'] = $row['Tel'];

                // Authentification réussie
                $isConnected = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
                $_SESSION["loggedin"] = true;
                echo "Authentification réussie. Bienvenue, " . $row['Firstname_User'];

                header("Location: ..\V\penalityForm.php");
                
            } else {
                // Authentification échouée
                echo "Mot de passe incorrect. Veuillez réessayer.";
            }
        } else {
            // Utilisateur non trouvé
            echo "Utilisateur non trouvé. Veuillez réessayer.";
        }
    } catch (PDOException $e) {
        // Gérer les erreurs de la base de données
        echo "Erreur de base de données : " . $e->getMessage();
    }
}

/** @author Simon <loro-simon@live.fr> */
// Fonction de déconnexion
 public static function logout() {
    session_start();

    // Si le bouton de déconnexion est cliqué, déconnectez l'utilisateur
    if (isset($_POST['logout'])) {
        // Vérifiez si la session est active avant de la détruire
        if (session_status() == PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
        header("Location: ..\V\index.php");
        exit();
    }}


/** @author Simon <loro-simon@live.fr> */
public static function closeConnection()
{
$this->pdo = null;
}
}

?>
