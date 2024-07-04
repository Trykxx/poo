<?php

namespace App\Entity;

use App\Abstract\Vehicule;
use App\Utilitaire\Engine;
use App\Entity\User;

class Peugeot extends Vehicule implements Engine
{
    private string $carburant;

    public function carburant(): string
    {
        return 'essence';
    }

    public function nbTest()
    {
        return parent::nbTest() + 70;
    }

    /**
     * Get the value of carburant
     */
    public function getCarburant()
    {
        return $this->carburant;
    }

    /**
     * Set the value of carburant
     *
     * @return  self
     */
    public function setCarburant($carburant)
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function start(User $utilisateur):string
    {
        return "{$utilisateur->getPseudo()} a démarré la Peugeot";
    }
}
