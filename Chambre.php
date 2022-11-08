<?php

// Class
Class Chambre{
    private int $numChambre;
    private Hotel $hotel;
    private float $prix;
    private int $nbLits;
    private bool $wifi;
    private bool $etat;
    private $reservations;

    // Construct
    public function __construct(int $numChambre, Hotel $hotel, float $prix, int $nbLits, bool $wifi, bool $etat){
        $this->numChambre = $numChambre;
        $this->hotel = $hotel;
        $this->hotel->ajouterChambre($this);
        $this->prix = $prix;
        $this->nbLits = $nbLits;
        $this->wifi = $wifi;
        $this->etat = $etat;
        $this->reservations=[];
    }

    // Tableaux
    public function ajouterReservation($reservation){
        $this->reservations[] = $reservation;
    }
    
    // Getters
    public function getNumChambre():int{
        return $this->numChambre;
    }
    public function getHotel():Hotel{
        return $this->hotel;
    }
    public function getPrix():float{
        return $this->prix;
    }
    public function getNbLits():int{
        return $this->nbLits;
    }
    public function getWifi(){
        if($this->wifi==true){
            return "Wifi: oui";
        }elseif($this->wifi==false){
            return "Wifi: non";
        }
    }
    public function getEtat(){
        if($this->etat){
            return "Etat: <span class='dispo'>DISPONIBLE</span>";
        }else{
            return "Etat: <span class='reservee'>RÉSERVÉE</span>";
        }
    }
    public function getReservations(){
        return $this->reservations;
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
    public function setPrix(float $prix){
        $this->prix = $prix;
        return $this->prix;
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
    public function setReservations($reservations){
        return $this->reservations = $reservations;
    }

    // Convert to string
    public function __toString(){
        return "";
    }  

}
?>