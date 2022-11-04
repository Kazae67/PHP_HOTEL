<?php

//ajouter un namespace(peut-être)

// class
class Client{
    private string $nom;
    private string $prenom;
    private string $adresse;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $adresse, $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    // Getters
    public function getNom():string{
        return $this->nom;
    }
    public function getPrenom():string{
        return $this->prenom;
    }
    public function getAdresse():string{
        return $this->adresse;
    }
    public function getdateNaissance():DateTime{
        return $this->dateNaissance;
    }
    public function getAge():string{
        return $this->getDateNaissance()->format("d-m-Y");
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
    public function setAdresse(string $adresse){
        $this->adresse = $adresse;
        return $this->adresse;
    }
    public function setDateNaissance(DateTime $dateNaissance){
        $this->dateNaissance = $dateNaissance;
        return $this->dateNaissance;
    }

    // Function au préalable

    // Convertir en string

    public function __toString(){
        return "
        Nom : $this->name
        Prénom : $this->prenom
        Adresse : $this->adresse
        Date de naissance : $this->dateNaissance";
    }
}