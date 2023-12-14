<?php
include_once "../M/User.class.php";
include_once "../M/Penality.class.php";

class Debt 
{
    private string $date;
    private User $user;
    private Penality $penality;
    private Bool $status;
    private string $detail;

    public function __construct (string $nameUser, string $firstname, string $libelle, float $price, $date, bool $status, string $detail)
    {
        $this->user = new User ( $nameUser, $firstname);
        $this->penality = new Penality ( $libelle, $price);
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