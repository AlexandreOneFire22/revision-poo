<?php


namespace App;


use App\Entites\Equipe;

class Personne {

    private string $nom;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function liker(Equipe $equipe) : void {

        $equipe->incrementerNombreLikes();
    }

}
