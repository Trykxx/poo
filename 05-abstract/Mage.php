<?php

require_once './Player.php';
// require_once '../06-interface/Guerison.php';

class Mage extends Player implements Guerison
{
    private int $mana;

    public function __construct($name, $mana)
    {
        parent::__construct($name);
        $this->mana = $mana;
    }

    /**
     * Get the value of mana
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     *
     * @return  self
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    public function hit(){
        $this->life = $this->life - 30;
    }

    public function reanime():void
    {

    }
    public function nourrir(int $n):int
    {
        return $n;
    }
}
