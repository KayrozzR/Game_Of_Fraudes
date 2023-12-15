<?php

class User {
    private int $idUser;
    private string $nameUser;
    private string $firstnameUser;
    private string $telUser;
    private string $mailUser;
    private string $passwordUser;
    private int $cpt_Denounce;


    public function __construct(int $idUser,string $nameUser, string $firstnameUser, string $telUser, string $mailUser,string $passwordUser){
        $this->nameUser = $nameUser;
        $this->firstnameUser = $firstnameUser;
        $this->telUser = $telUser;
        $this->mailUser = $mailUser;
        $this->passwordUser = password_hash($passwordUser, PASSWORD_DEFAULT);
        $this->idUser = $idUser;
        // self :: $cpt_Denounce++;
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

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }
}
    