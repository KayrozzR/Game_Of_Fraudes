<?php
class Penality
{
    private ?int $id_penality;
    private string $libelle;
    private int $price;

    public function __construct(string $libelle, int $price, ?int $id_penality = null)
    {
        $this->id_penality = $id_penality;
        $this->libelle = $libelle;
        $this->price = $price;
    }

    public function getIdPenality(): ?int
    {
        return $this->id_penality;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}
?>
