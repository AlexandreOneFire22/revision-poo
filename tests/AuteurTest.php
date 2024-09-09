<?php

require_once '../src/Acteur.php';

//Instancier la classe Flim

$auteur1 = new Acteur("MOI","toi");

echo $auteur1->getNom();