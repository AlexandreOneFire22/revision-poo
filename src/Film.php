<?php

require_once("Acteur.php");

class Film {
    // Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;

    private array $acteurs = [];

    // Méthodes
    // Constructeur permettant de créer des instances d'une classe
    // INSTANCIATION

    public function __construct(string $titre, string $realisateur, DateTime $dateSortie, array $acteurs=null){
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
        //$this->acteurs = [];
    }
    // Accesseurs (getters)

    public function ajouterActeur(Acteur $acteur): void{
        $this->acteurs[] = $acteur;
    }
    public function getTitre():string{
        return $this->titre;
    }
    public function getRealisateur():string{
    return $this->realisateur;
    }
    public function getDateSortie():string
    {
        return $this->dateSortie;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs(): array
    {
        return $this->acteurs;
    }



    public function anciennete (){
        $now = new DateTime();
        $interval = $now->diff($this->dateSortie);
        return $interval ->y;
    }
}
