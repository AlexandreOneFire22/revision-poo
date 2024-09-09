<?php

require "./vendor/autoload.php";

use App\Championnat;
use App\Entites\Equipe;
use App\Personne;

$psg = new Equipe("PSG");
$om = new Equipe("OM");

$ligue1 = new Championnat("Ligue 1");

$dupond = new Personne("Dupond");
$durant = new Personne("Durant");

$ligue1->ajouterEquipe($psg);
$ligue1->ajouterEquipe($om);

echo "Il y a ".$ligue1->getNombreEquipes()." équipe en ligue1";
echo PHP_EOL;

$dupond->liker($psg);
$durant->liker($om);

echo "Le ".$psg->getNom()." a ". $psg->getNombreLikes()." like";

dump($ligue1);