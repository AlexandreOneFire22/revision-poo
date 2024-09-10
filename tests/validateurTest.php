<?php
use PHPUnit\Framework\TestCase;

require_once "vendor/autoload.php";

use App\Validateur;

class ValidateurTest extends TestCase{

    private Validateur $validateur;

    protected function setUp() : void
    {
        //Cette méthode est appelée lors de l'execution de chaque test

        $this->validateur = new Validateur();

    }

    public function testOK(){
        //Arrange
        //Act
        //Assert
        $this->assertTrue(true);
    }

    public function testVerifierNombre2_NombrePositif_True() {

        //Arrange
        //$validateur = new Validateur();

        $nombre = 10;

        //Act
        $resultat=$this->validateur->verifieNombre2($nombre);

        //Assert
        $this->assertTrue($resultat);

    }

    public function testVerifierNombre2_NombreNegatifZero_Exception() {
        //Vérification de l'exception

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nombre est invalide");

        //Arrange
        //$validateur = new Validateur();

        $nombre = -5;

        //Act
        $resultat=$this->validateur->verifieNombre2($nombre);

        //Assert

    }
}