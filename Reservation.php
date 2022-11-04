<?php

// Class
Class Reservation{
    private Client $client;
    private Chambre $chambre;
    private DateTime $dateEntree; 
    private DateTime $dateSortie;

    public function __construct(Client $client, Chambre $chambre, string $dateEntree, string $dateSortie){
        $this->client = $client;
        $this->client->nouveauClient($this);
        $this->chambre = $chambre;
        $this->chambre->nouvelleChambre($this);
        $this->dateEntree = new DateTime($dateEntree);
        $this->dateSortie = new DateTime($dateSortie);
    }

    // Getters
    public function getClient():Client{
        return $this->client;
    }
    public function getChambre():Chambre{
        return $this->chambre;
    }
    public function getDateEntree():DateTime{
        return $this->dateEntree;
    }
    public function getDateEntreeExact():string{
        return $this->getDateEntree()->format("Y-m-d");
    }
    public function getDateSortie():DateTime{
        return $this->dateSortie;
    }
    public function getDateSortieExact():string{
        return $this->getDateSortie()->format("Y-m-d");
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
    public function setDateEntree(DateTime $dateEntree){
        $this->dateEntree = $dateEntree;
        return $this->dateEntree;
    }
    public function setDateSortie(DateTime $dateSortie){
        $this->dateSortie = $dateSortie;
        return $this->dateSortie;
    }

    // Convert en string
    public function __toString(){
        return "";
    }
}


?>