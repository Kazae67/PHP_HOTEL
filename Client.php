<?php

//ajouter un namespace(peut-être)

// class
class Client{
    private string $prenom;
    private string $nom;
    private array $reservations;

    public function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->reservations = [];
    }

    // Tableau
    public function ajouterReservation($reservation){
        $this->reservations[] = $reservation;
    }

    // Getters
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getReservations():array{
        return $this->reservation;
    }
    // Setters

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
        return $this->prenom;
    }
    public function setNom(string $nom){
        $this->nom = $nom;
        return $this->nom;
    }
    public function setReservations(array $reservation){
        $this->reservation = $reservation;
        return $this->reservation;
    }

    // Afficher reservation
    public function afficherReservation(){
        echo "Réservations de ".$this->prenom." ".$this->nom."<br>";
        foreach($this->reservations as $reservation){
            echo $reservation->syntheseReservation().$reservation. "<br>";    
        }
    }
    
    public function afficherTotalReservation() {
        $total = 0;
        foreach($this->reservations as $resarvation) {
            $total += $resarvation->getNbJours() * $resarvation->getChambre()->getPrix();
        }
        return "Total : $total €<br/>";
    }    

    // Convertir en string
    public function __toString(){
        return "
        Nom : ".$this->nom." "."
        Prénom : ".$this->prenom;
    }

}
?>