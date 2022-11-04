<?php

// Class
Class Hotel{
    private string $nom;
    private string $adresse;
    private array $chambres;
    private array $reservations;

    public function __construct(string $nom, string $adresse){
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->chambres = [];
        $this->reservation = [];
    }

    // Tableaux
    public function tableauChambre(Chambre $chambres){
        $this->chambres[] = $chambres;
    }
    public function tableauReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getAdresse():string{
        return $this->adresse;
    }
    public function getChambres():array{
        return $this->chambres;
    }
    public function getReservation():array{
        return $this->reservations;
    }

    // Setters
    public function setNom(string $nom){
        $this->nom = $nom;
        return $this->nom;
    }
    public function setAdresse(string $adresse){
        $this->adresse = $adresse;
        return $this->adresse;
    }
    public function setChambres(array $chambres){
        $this->chambres = $chambres;
        return $this->chambres;
    }
    public function setReservation(array $reservation){
        $this->reservation = $reservation;
        return $this->reservation;
    }

    // Infos
    public function getEtatChambres(){
        return $this->nom."<br> ".$this->adresse."<br>
        Nombre de chambres : ".count($this->chambres)."<br>
        Nombre de chambres réservées : ".count($this->reservations)."<br>
        Nombre de chambres dispo : ".count($this->chambres) - count($this->reservation)."<br>";
    }
    
    // Convert to string
    public function __toString(){
        return 
        $this->nom."<br>".
        $this->adresse;
    }
}
?>