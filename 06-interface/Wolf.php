<?php

require_once './SavageAnimal.php';
require_once './Animal.php';

class Wolf extends Animal implements SavageAnimal
{
    private bool $solitaire;

    public function __construct(string $nom, int $age, int $pattes, array $aliments, bool $solitaire)
    {
        parent::__construct($nom, $age, $pattes, $aliments);
        $this->solitaire = $solitaire;
    }

    /**
     * Get the value of solitaire
     */
    public function getSolitaire()
    {
        return $this->solitaire;
    }

    /**
     * Set the value of solitaire
     *
     * @return  self
     */
    public function setSolitaire($solitaire)
    {
        $this->solitaire = $solitaire;

        return $this;
    }

    public function devore():string
    {
        return "Je viens de manger";
    }

    public function eatBird(Bird $object):string
    {
        return "Je viens de manger l'oiseau qui s'appelait $object->nom";
    }
}
