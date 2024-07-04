<?php

namespace App\Entity;

final class Bd
{
    private string $nom;
    private string $description;
    private string $dateParution;
    private string $auteur;

    public function __construct(string $nom, string $description, string $dateParution, string $auteur)

    {
        $this->nom = $nom;
        $this->description = $description;
        $this->dateParution = $dateParution;
        $this->auteur = $auteur;
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
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateParution
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set the value of dateParution
     *
     * @return  self
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get the value of auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}
