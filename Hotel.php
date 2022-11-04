<?php

// Class
Class Hotel{
    private int $nbChambres;
    private int $nbChambresReservees;
    private int $nbChambresDispo;

    public function __construct(int $nbChambres, int $nbChambresReservees, int $nbChambresDispo){
        $this->nbChambres = $nbChambres;
        $this->nbChambresReservees = $nbChambresReservees;
        $this->nbChambresDispo = $nbChambresDispo;
    }

    // Getters
    public function getNbChambres():int{
        return $this->nbChambres;
     }
    public function getNbChambresReservees():int{
        return $this->nbChambresReservees;
    }
    public function getNbChambresDispo():int{
        return $this->nbChambresDispo;
    }

    // Setters
    public function setNbChambres(int $nbChambres){
        $this->nbChambres = $nbChambres;
        return $this->nbChambres;
    }
    public function setNbChambresReservees(int $nbChambresReservees){
        $this->nbChambresReservees = $nbChambresReservees;
        return $this->nbChambresReservees;
    }
    public function setNbChambresDispo(int $nbChambresDispo){
        $this->nbChambresDispo = $nbChambresDispo;
        return $this->nbChambresDispo;
    }

    // Convertir en string
    public function __toString(){
        return "";
    }
}