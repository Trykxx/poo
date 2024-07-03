<?php

abstract class Animal
{
    protected string $nom;

    protected int $age;

    protected int $nbPattes;

    protected array $listAliment;

    public function __construct($nom, $age, $pattes, $aliments)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->nbPattes = $pattes;
        $this->listAliment = $aliments;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of nbPattes
     */
    public function getNbPattes()
    {
        return $this->nbPattes;
    }

    /**
     * Set the value of nbPattes
     *
     * @return  self
     */
    public function setNbPattes($nbPattes)
    {
        $this->nbPattes = $nbPattes;

        return $this;
    }

    /**
     * Get the value of listAliment
     */
    public function getListAliment()
    {
        return $this->listAliment;
    }

    /**
     * Set the value of listAliment
     *
     * @return  self
     */
    public function setListAliment($listAliment)
    {
        $this->listAliment = $listAliment;

        return $this;
    }
}
