<?php

class Penality
{
    private $id_penality;
    private string $libelle;
    private int $price;


    public function __construct(string $libelle, int $price) {
        $this->id_penality = $id_penality;
        $this->libelle = $libelle;
        $this->price = $price;
        
    }

    public function getIdPenality()
    {
        return $this->id_penality;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
