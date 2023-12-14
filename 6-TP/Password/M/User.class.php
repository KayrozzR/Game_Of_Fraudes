<?php

class User {
    private string $nameUser;
    private string $firstnameUser;
    private string $telUser;
    private string $mailUser;
    private string $passwordUser;
    private int $cpt_Denounce;


    public function __construct(string $nameUser, string $firstnameUser, string $telUser, string $mailUser,string $passwordUser){
        $this->nameUser = $nameUser;
        $this->firstnameUser = $firstnameUser;
        $this->telUser = $telUser;
        $this->mailUser = $mailUser;
        $this->passwordUser =  password_hash($passwordUser, PASSWORD_DEFAULT);
        // self :: $cpt_Denounce++;
    }

    function createUser() : void {
        $bdd = new PDO('mysql:host=localhost;dbname=game_of_fraudes;charset=utf8mb4', 'root', '');
        $sql = "INSERT INTO user (Name_User, FirstName_User, Tel, Mail, Password) VALUES (?,?,?,?,?)";
        $stmt= $bdd->prepare($sql);
        $stmt->execute([$this->nom, $this->prenom, $this->tel, $this->Mail, $this->password]);
    }
    /**
     * Get the value of nameUser
     */ 
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * Get the value of firstnameUser
     */ 
    public function getFirstnameUser()
    {
        return $this->firstnameUser;
    }

    /**
     * Get the value of telUser
     */ 
    public function getTelUser()
    {
        return $this->telUser;
    }

    /**
     * Get the value of mailUser
     */ 
    public function getMailUser()
    {
        return $this->mailUser;
    }

    /**
     * Get the value of passwordUser
     */ 
    public function getPasswordUser()
    {
        return $this->passwordUser;
    }
}
    