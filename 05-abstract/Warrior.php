<?php

require_once './Player.php';

class Warrior extends Player
{
    /**
     * @var int
     */
    private int $arrow;

    public function __construct($name, $fleche)
    {
        parent::__construct($name);
        $this->arrow = $fleche;
    }

    /**
     * Get the value of arrow
     */
    public function getArrow()
    {
        return $this->arrow;
    }

    /**
     * Set the value of arrow
     *
     * @return  self
     */
    public function setArrow($arrow)
    {
        $this->arrow = $arrow;

        return $this;
    }

    public function hit(){
        $this->life = $this->life - 15;
    }
}
