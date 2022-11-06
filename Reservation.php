<?php

// Class
Class Reservation{
    private Client $client;
    private Chambre $chambre;
    private Hotel $hotel;
    private DateTime $dateEntree; 
    private DateTime $dateSortie;

    public function __construct(Client $client, Chambre $chambre, Hotel $hotel, string $dateEntree, string $dateSortie){
        $this->client = $client;
        $this->chambre = $chambre;
        $this->hotel = $hotel;
        $this->dateEntree = new DateTime($dateEntree);
        $this->dateSortie = new DateTime($dateSortie);
        $this->client->ajouterReservation($this);
        $this->chambre->ajouterReservation($this);
        $this->hotel->ajouterReservation($this);
    }

    // Getters
    public function getClient():Client{
        return $this->client;
    }
    public function getChambre():Chambre{
        return $this->chambre;
    }
    public function getHotel():Hotel{
        return $this->hotel;
    }
    public function getDateEntree():DateTime{
        return $this->dateEntree;
    }
    public function getDateSortie():DateTime{
        return $this->dateSortie;
    }
    
    // Setters
    public function setClient(Client $client){
        $this->client = $client;
        return $this->client;
    }
    public function setChambre(Chambre $chambre){
        $this->chambre = $chambre;
        return $this->chambre;
    }
    public function setHotel(Hotel $hotel){
        $this->hotel = $hotel;
        return $this->hotel;
    }
    public function setDateEntree(DateTime $dateEntree){
        $this->dateEntree = $dateEntree;
        return $this->dateEntree;
    }
    public function setDateSortie(DateTime $dateSortie){
        $this->dateSortie = $dateSortie;
        return $this->dateSortie;
    }

    // Function
    public function dateReservation(){
        return 
        $this->client->getPrenom()." ".$this->client->getNom()." - Chambre ".$this->chambre->getNumChambre()." - du ".$this->dateEntree->format('d/m/Y')." au ".$this->dateSortie->format("d/m/Y");
    }   
    public function syntheseReservation(){
        return "Hotel: ".$this->hotel->getNom()." / Chambre : ".$this->chambre->getNumChambre()." (".$this->chambre->getNbLits()." lits -".$this->chambre->getPrix()." € - ".$this->chambre->getWifi().")";
    } 

    // Convert en string
    public function __toString(){
        return "";
    }
}


?>