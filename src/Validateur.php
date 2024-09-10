<?php

namespace App;

class Validateur
{
    // Méthode qui vérifie si un nombre est strictement positif

    public function verifieNombre(int $nombre) : bool {

        // on teste toujours les cas d'erreurs en premier

        if ($nombre <= 0) {
            return false;
        }
        return true;
    }

    public function verifieNombre2(int $nombre) : bool {

        // on teste toujours les cas d'erreurs en premier

        if ($nombre <= 0) {
            // Lancer une Exception.
            throw new \Exception("Le nombre est invalide");
        }
        return true;
    }

    public function verifPassword(string $password) : bool
    {

        $passwordArray = str_split($password);

        if (strlen($password) < 8) {
            // Lancer une Exception.
            throw new \Exception("Le mot de passe $password doit contenir au moins 8 caractère");
        }

        foreach ($passwordArray as $caractère) {
            if (ctype_upper($caractère) && !isset($majuscule)) {
                $majuscule = True;
            } elseif (ctype_lower($caractère) && !isset($minuscule)) {
                $minuscule = True;
            } elseif (ctype_digit($caractère) && !isset($chiffre)) {
                $chiffre = True;
            }
        }

        if (!isset($majuscule)){
            throw new \Exception("Le mot de passe $password doit contenir au moins une majuscule");
        }elseif (!isset($minuscule)) {
            throw new \Exception("Le mot de passe $password doit contenir au moins une minuscule");
        }elseif (!isset($chiffre)) {
            throw new \Exception("Le mot de passe $password doit contenir au moins un chiffre");
        }

    return True;
    }





}