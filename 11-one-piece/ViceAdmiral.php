<?php

require_once './Marine.php';

class ViceAdmiral extends Marine
{
    public function __construct(string $nom,int $age,int $prime)
    {
        $this->name=$nom;
        $this->age=$age;
        $this->bounty=$prime;
    }

    /**
     * @return string
     */
    public function commandFleet():string
    {
        return "Je suis {$this->getName()} et je commande la flotte";
    }
}