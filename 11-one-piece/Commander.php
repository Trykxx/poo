<?php

require_once './Revolutionary.php';

class Commander extends Revolutionary
{
    public function __construct(string $nom,int $age,int $prime)
    {
        $this->name=$nom;
        $this->age=$age;
        $this->bounty=$prime;
    }

    public function leadRevolution():string
    {
        return "affiche une phrase spécifique de Commander";
    }
}