<?php

//ajouter un namespace(peut-être)

// class
class Client{
    private string $nom;
    private string $prenom;
    private array $reservation;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservation = [];
    }

    // Tableau
    public function tableauReservation(Reservation $reservation){
        $this->reservation[] = $reservation;
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getReservation():array{
        return $this->reservation;
    }
    // Setters

    public function setNom(string $nom){
        $this->nom = $nom;
        return $this->nom;
    }
    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
        return $this->prenom;
    }
    public function setReservation(array $reservation){
        $this->reservation = $reservation;
        return $this->reservation;
    }


    // Function au préalable

    // Convertir en string

    public function __toString(){
        return "
        Nom : ".$this->nom." "."
        Prénom : ".$this->prenom;
    }

}
?>