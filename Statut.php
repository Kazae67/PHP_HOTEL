<?php


//Class

Class Statut extends personne{
    private string $etat;
    private string $wifi;

    public function __construct(string $etat, string $wifi){
        $this->etat = $etat;
        $this->wifi = $wifi;
    }

    // Getters
    public function getEtat(): string{
        return $this->etat;
    }
    public function getWifi(): string{
        return $this->wifi;
    }

    // Setters
    public function setWifi(string $wifi){
        $this->wifi = $wifi;
        return $this->wifi;
    }

    public function setEtat(string $etat){
        $this->etat = $etat;
        return $this->etat;
    }

    // Convertir en string
    public function __toString(){
        return "";
    }
}
