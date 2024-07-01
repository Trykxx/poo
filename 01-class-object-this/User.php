<?php

// Une classe est un modele qui permet de créer des objets
// Une classe est un plan de construction d'objets
// Une classe est composé de propriétés et de méthodes
// Une classe est un modèle de données

class User
{
    // Une propriété est une variable définie dans une classe
    // Une méthode est une fonction definie dans une classe

    /**
     * Le prenom de l'utilisateur
     * @var string
     */
    public string $firstName; // une propriété

    /**
     * Le nom de l'utilisateur
     * @var string
     */
    public string $lastName;

    /**
     * Le mail de l'utilisateur
     * @var string
     */
    public string $email;


    /**
     * @var string
     */
    public string $password;


    /**
     * @var int
     */
    public int $age;


    /**
     * @var array
     */
    public array $notes;

    /**
     * @return string
     */
    public function bonjour(): string // une méthode
    {
        return "Bonjour, je m'appelle $this->firstName $this->lastName ";
    }

    /**
     * @param int $age
     * @return string
     */
    public function presentation(int $age): string
    {
        return $this->bonjour() . "et j'ai $age ans";
    }
}
