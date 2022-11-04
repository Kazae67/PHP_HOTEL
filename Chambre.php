<?php

// Class
Class Chambre{
    private int $numChambre;
    private Hotel $hotel;
    private float $prix;
    private string $devise;
    private int $nbLits;
    private bool $wifi;
    private bool $etat;

    // Construct
    public function __construct(int $numChambre, Hotel $hotel, float $prix, string $devise, int $nbLits, bool $wifi, bool $etat){
        $this->numChambre = $numChambre;
        $this->hotel = $hotel;
        $this->prix = $prix;
        $this->devise = $devise;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->etat = $etat;
    }
    // Getters
    public function getNumChambre():int{
        return $this->numChambre;
    }
    public function getHotel():Hotel{
        return $this->hotel;
    }
    public function getPrix():string{
        return $this->prix;
    }
    public function getDevise():string{
        return $this->devise;
    }
    public function getNbLits():int{
        return $this->nbLits;
    }
    public function getWifi():bool{
        return $this->wifi;
    }
    public function getEtat():bool{
        return $this->etat;
    }

    // Setters
    public function setNumChambre(int $numChambre){
        $this->numChambre = $numChambre;
        return $this->numChambre;
    }
    public function setHotel(Hotel $hotel){
        $this->hotel = $hotel;
        return $this->hotel;
    }
    public function setPrix(int $prix){
        $this->prix = $prix;
        return $this->prix;
    }
    public function setDevise(string $devise){
        $this->devise = $devise;
        return $this->devise;
    }
    public function setNbLits(int $nbLits){
        $this->nbLits = $nbLits;
        return $this->nbLits;
    }
    public function setWifi(bool $wifi){
        $this->wifi = $wifi;
        return $this->wifi;
    }
    public function setEtat(bool $etat){
        $this->etat = $etat;
        return $this->etat;
    }

    // Convert to string
    public function __toString(){
        return "";
    }  

}
?>