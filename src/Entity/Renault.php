<?php
namespace App\Entity;

use App\Abstract\Vehicule;
use App\Utilitaire\Engine;
use App\Entity\User;

class Renault extends Vehicule implements Engine
{
    private string $carburant;

    public function carburant(): string
    {
        return 'diesel';
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 30;
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
        return "{$utilisateur->getPseudo()} a démarré la Renault";
    }
}
