<?php


use PHPUnit\Framework\TestCase;

require_once "vendor/autoload.php";

use App\Film;
use App\Acteur;

class FilmTest extends TestCase{

    private Film $film;
    private Acteur $acteur;

    protected function setUp(): void
    {
        //Cette méthode est appelée lors de l'execution de chaque test

        $this->film = new Film("La vie","moi",\DateTime::createFromFormat("d/m/Y","1/09/2005"));
    }

    public function testOK()
    {
        //Arrange
        //Act
        //Assert
        $this->assertTrue(true);
    }

    public function testAjouterActeur_NewActeur_True() {

        //Arrange

        $this->acteur_2 = new Acteur("BOILEAU_2","Ethan_2");

        //Act
        $this->film->ajouterActeur($this->acteur_2);

        if (in_array($this->acteur_2,$this->film->getActeurs())){
            $resultat = True;
        }else{
            $resultat = False;
        }


        //Assert

        $this->assertTrue($resultat);

    }

    public function testAjouterActeur_ActeurDejaPresent_Exception() {
        //Vérification de l'exception

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("acteur est déjà présent dans se Film.");

        //Arrange

        $this->acteur = new Acteur("BOILEAU","Ethan");

        $this->film->ajouterActeur($this->acteur);

        //Act
        $this->film->ajouterActeur($this->acteur);

        //Assert

    }


}