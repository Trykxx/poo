<?php
namespace App\Abstract;

use App\Entity\User;

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

    public function accident(User $user, bool $isBlesse):string
    {
        $user->setBlessure($isBlesse);

        if ($user->getBlessure()) {
            return "{$user->getPseudo()} a eu un accident et il est blessé";
        }
        return "{$user->getPseudo()} n'a pas eu d'accident et n'est pas blessé";
    }
}
