<?php

namespace App;

require_once("Acteur.php");

class Film {
    // Attributs
    private string $titre;
    private string $realisateur;
    private \DateTime $dateSortie;

    private array $acteurs = [];

    // Méthodes
    // Constructeur permettant de créer des instances d'une classe
    // INSTANCIATION

    public function __construct(string $titre, string $realisateur, \DateTime $dateSortie){
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;

    }
    // Accesseurs (getters)

    public function ajouterActeur(Acteur $acteur): void{

        if (in_array($acteur,$this->acteurs)) {
            // Lancer une Exception.
            throw new \Exception("L'acteur est déjà présent dans se Film.");
        }
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



    public function getAnciennete (){
        $now = new DateTime();
        $interval = $now->diff($this->dateSortie);
        return $interval ->y;
    }
}
