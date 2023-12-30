<?php

include_once "../M/User.class.php";
include_once "../M/Penality.class.php";

class Debt 
{
    private int $idDebt;
    private string $date;
    private User $idUser;
    private User $idReceiver;
    private Penality $penality;
    private Bool $status;
    private string $detail;

    public function __construct (User $idUser,User $idReceiver, Penality $penality, $date, bool $status, string $detail)
    {
        $this->idUser = $idUser;
        $this->idReceiver = $idReceiver;
        $this->penality = $penality ;
        $this->date = $date;
        $this->status = $status;
        $this->detail = $detail;
    }



    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of detail
     */ 
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Get the value of penality
     */ 
    public function getPenality()
    {
        return $this->penality;
    }


    /**
     * Get the value of idReceiver
     */ 
    public function getIdReceiver()
    {
        return $this->idReceiver;
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }



}