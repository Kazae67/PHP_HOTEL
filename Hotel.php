<?php

// Class
Class Hotel{
    private string $prenom;
    private string $nom;
    private string $adresse;
    private array $chambres = [];
    private array $reservations  = [];

    public function __construct(string $prenom,string $nom, string $adresse){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

    // Getters
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function getAdresse():string{
        return $this->adresse;
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
    public function setAdresse(string $adresse){
        $this->adresse = $adresse;
        return $this->adresse;
    }

    // Convert to string
    public function __toString(){
        return "";
    }
}