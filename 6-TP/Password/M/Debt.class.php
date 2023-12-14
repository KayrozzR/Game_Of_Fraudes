<?php
include_once "../M/User.class.php";
include_once "../M/Penality.class.php";

class Debt 
{
    private string $date;
    private User $user;
    private Penality $penality;
    private bool $status;
    private string $detail;

    function __construct (
        string $nameUser, 
        string $firstnameUser,
        string $telUser,
        string $mailUser,
        string $passwordUser,
        int $cpt_Denounce,
        int $id_penality,
        string $libelle,
        float $price,
        $date,
        bool $status,
        string $detail
    ) {
        $this->user = new User($nameUser, $firstnameUser, $telUser, $mailUser, $passwordUser, $cpt_Denounce);
        $this->penality = new Penality($id_penality, $libelle, $price);
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
}