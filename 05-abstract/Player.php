<?php
// require_once '../06-interface/Guerison.php';

abstract class Player
{
    protected string $name;
    protected int $life = 100;
    protected int $score = 0;

    public function __construct($nom)
    {
        $this->name = $nom;
        // $this->life = $vie;
        // $this->score = $points;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @return  self
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    public function hit()
    {
        $this->life = $this->life - 10;
    }
}
