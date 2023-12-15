<?php

class Penality {
    private int $id_penality;
    private string $libelle;
    private float $price;

    public function __construct(int $id_penality,string $libelle, float $price) {
        $this->libelle = $libelle;
        $this->price = $price;
        $this->id_penality = $id_penality;
    }

    public function getIdPenality() {
        return $this->id_penality;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function getPrice() {
        return $this->price;
    }
    
    
}
?>