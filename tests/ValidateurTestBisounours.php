<?php

require_once "vendor/autoload.php";

use App\Validateur;
use App\Film;
use App\Acteur;

$validateur = new Validateur();

$nombre = 10;

if ($validateur->verifieNombre($nombre)) {
    echo "Le nombre $nombre est valide";
} else {
    echo "Le nombre $nombre est invalide !";
}

echo PHP_EOL;
// Avec gestion des exceptions

$nombre =-12;

try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
}catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}

echo PHP_EOL;

$password = "MR Licorne 69";

try {
    // Code surveillé (susceptible de lancer une exception)
    $validateur->verifPassword($password);
    echo "Le mot de passe $password est valide";
}catch (\Exception $e) {
    // Attraper l'exception lancée
    echo $e->getMessage();
}







$film1 = new Film("test","moi",\DateTime::createFromFormat("d/m/Y","1/09/2005"));



$acteur = new Acteur("BOILEAU","Ethan");

$film1->ajouterActeur($acteur);

dump($film1->getActeurs());
























