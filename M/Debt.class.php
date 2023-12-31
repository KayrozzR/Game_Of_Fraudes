<?php

include_once "../M/User.class.php";
include_once "../M/Penality.class.php";

class Debt
{
    private ?int $nb_debt;
    private User $idUser;
    private User $idReceiver;
    private Penality $penality;
    private string $date;
    private bool $status;
    private string $detail;

    public function __construct(?int $nb_debt, User $idUser, User $idReceiver, Penality $penality, string $date, bool $status, string $detail)
    {
        $this->nb_debt = $nb_debt;
        $this->idUser = $idUser;
        $this->idReceiver = $idReceiver;
        $this->penality = $penality;
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