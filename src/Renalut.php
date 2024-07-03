<?php

require_once './Vehicule.php';
require_once './Engine.php';


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

    function start(User $utilisateur)
    {
        
    }
}