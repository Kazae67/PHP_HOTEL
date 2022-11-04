<?php

// Class
Class Reservation{
    private int $chambre;
    private string $client;
    private DateTime $dateEntree; 
    private DateTime $dateSortie;

    public function __construct(int $chambre, string $client, string $dateEntree, string $dateSortie){
        $this->chambre = $chambre;
        $this->client = $client;
        $this->dateEntree = new DateTime($dateEntree);
        $this->dateSortie = new DateTime($dateSortie);
    }

    // Getters
    public function getChambre():int{
        return $this->chambre;
    }
    public function getClient():string{
        return $this->client;
    }
    public function getDateEntree():DateTime{
        return $this->dateEntree;
    }
    public function getDateSortie():DateTime{
        return $this->dateSortie;
    }
    
    // Setters
    public function setChambre(int $chambre){
        $this->chambre = $chambre;
        return $this->chambre;
    }
    public function setClient(string $client){
        $this->client = $client;
        return $this->client;
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
}


// Mettre un "if" pour qu'il marque "Aucune réservation" si le champ est vide