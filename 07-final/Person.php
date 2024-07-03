<?php

final class Person
{
    /**
     * @var string
     */
    private string $nom;
    /**
     * @var string
     */
    private string $prenom;
    /**
     * @var int
     */
    private int $age;

    public function __construct(string $nom, string $prenom, int $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */
    public function setNom(string $nom):self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string
     */
    public function getPrenom():string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string  $prenom
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return  int
     */
    public function getAge():int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param  int  $age
     *
     * @return  self
     */
    public function setAge(int $age):self
    {
        $this->age = $age;

        return $this;
    }
}
