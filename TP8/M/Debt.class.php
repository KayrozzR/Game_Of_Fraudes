<?php

class Debt 
{
    private string $date;
    private User $User;
    private Penality $penality;
    private Bool $status;
    private string $detail;

    function __construct (string $name, string $firstname, int $id_penality, string $libelle, float $price, $date, bool $status, string $detail)
    {
        $this->User = new User ( $name,  $firstname);
        $this->penality = new Penality ($id_penality,  $libelle,$price);
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