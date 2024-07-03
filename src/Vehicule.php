<?php

abstract class Vehicule
{
    protected int $nbTest = 100;

    final public function demarrer(): string
    {
        return 'Je suis démarré';
    }

    abstract public function carburant();

    public function nbTest()
    {
        return $this->nbTest;
    }

    /**
     * Get the value of nbTest
     */
    public function getNbTest()
    {
        return $this->nbTest;
    }

    /**
     * Set the value of nbTest
     *
     * @return  self
     */
    public function setNbTest($nbTest)
    {
        $this->nbTest = $nbTest;

        return $this;
    }
}
