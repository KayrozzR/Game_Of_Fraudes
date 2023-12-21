<?php

class Penality
{
    private int $id_penality;
    private string $libelle;
    private float $price;

<<<<<<< HEAD:6-TP/Update_User/M/Penality.class.php
    public function __construct(int $id_penality,string $libelle, float $price) {
=======
    public function __construct(string $libelle, float $price)
    {
>>>>>>> fc7f3720bd5d6033b751cc7fe815549f81390a44:M/Penality.class.php
        $this->libelle = $libelle;
        $this->price = $price;
        $this->id_penality = $id_penality;
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
