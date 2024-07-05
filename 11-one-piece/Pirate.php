<?php

require_once './Character.php';
require_once './CombatSkills.php';


class Pirate extends Character implements CombatSkills
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
    public function getRole(): string
    {
        return "Pirate";
    }


    /**
     * @return string
     */
    public function attack(): string
    {
        return "Je suis {$this->getName()} et j'attaque !";

    }


    /**
     * @return string
     */
    public function defend(): string
    {
        return "Je suis {$this->getName()} et je défends !";

    }
}
