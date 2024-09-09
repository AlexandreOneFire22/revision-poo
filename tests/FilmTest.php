<?php

require_once '../src/Film.php';

//Instancier la classe Flim

$film1 = new Film("truc","bidule",DateTime::createFromFormat("d/m/Y","10/04/2005"));

echo $film1->getTitre();

echo PHP_EOL;

echo $film1->anciennete();

$film1->ajouterActeur(new Acteur("truc1","bidule1"));
$film1->ajouterActeur(new Acteur("truc2","bidule2"));
$film1->ajouterActeur(new Acteur("truc3","bidule3"));
echo PHP_EOL;
print_r($film1->getActeurs());

// Afficher le nom des acteurs

foreach ($film1->getActeurs() as $acteur){
    echo $acteur->getNom();
    echo PHP_EOL;
}