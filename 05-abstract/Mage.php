<?php

require_once './Player.php';

class Mage extends Player
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

    //test
}
