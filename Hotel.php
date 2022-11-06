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
        $this->reservations = [];
    }

    // Tableaux
    public function ajouterChambre($chambre){
        $this->chambres[] = $chambre;
    }
    public function ajouterReservation($reservation){
        $this->reservations[] = $reservation;
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getAdresse():string{
        return $this->adresse;
    }
    public function getChambres(){
        return count($this->chambres);
    }
    public function getReservations(){
        return count($this->reservations);
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
    public function setReservations(array $reservation){
        $this->reservation = $reservation;
        return $this->reservation;
    }

    // Function
    public function chambreDispo(){
        return $this->getChambres() - $this->getReservations();
    }
    public function afficherHotel(){
        return " 
        Nombre de chambres : ".$this->getChambres()."<br>
        Nombre de chambres réservées : ".$this->getReservations()."<br>
        Nombre de chambres dispo : ".$this->chambreDispo()."<br> 
        <br>";
    }
    public function afficherReservation(){
        if ($this->getReservations()>=1){
            echo "Réservations de l'hôtel : ".$this->nom."<br>".$this->getReservations()." Réservations<br>";
            foreach($this->reservations as $reservation){
                echo $reservation->dateReservation(). "<br>";
            }
        }else{
            echo "Réservations de l'hôtel : ".$this->nom."<br>";
            echo "<br>Aucune réservation !<br>";
        }
    }

    // Convert to string
    public function __toString(){
        return 
        $this->nom."<br>".
        $this->adresse."<br>";
    }
}
?>