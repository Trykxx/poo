<?php
// Exercice : Construction d'une Classe PHP POO
// Objectif
// Créer une classe Book en PHP avec des propriétés et des méthodes permettant de manipuler des livres.

// Instructions
// Créer la classe Book avec les propriétés suivantes :

// title (string)
// author (string)
// pages (int)
// year (int)

// Ajouter un constructeur à la classe Book pour initialiser ces propriétés.

// Créer les méthodes setter et getter pour chaque propriété.

// Ajouter une méthode read qui affiche la phrase :
// "Je lis le livre XXX écrit par XXX", où XXX sera remplacé par le titre et l'auteur du livre.

// Données d'Exemple
// Utiliser les données suivantes pour tester votre classe :

// Livre 1 :

// Titre : "Alice au pays des merveilles"
// Auteur : "Lewis Carroll"
// Pages : 124
// Année : 1865

// Livre 2 :
// Titre : "Harry Potter à l'école des sorciers"
// Auteur : "J. K. Rowling"
// Pages : 320
// Année : 1997

class Book
{
    private string $title;
    private string $author;
    private int $pages;
    private int $year;

    public function __construct($auteur,$titre,$pages,$annee)
    {
        $this->author = $auteur;
        $this->title = $titre;
        $this->pages = $pages;
        $this->year = $annee;
    }

    /**
     * Get the value of title
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle(string $title):self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */
    public function getAuthor():string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor(string $author):self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of pages
     */
    public function getPages():int
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     *
     * @return  self
     */
    public function setPages(int $pages):self
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get the value of year
     */
    public function getYear():int
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */
    public function setYear(int $year):self
    {
        $this->year = $year;

        return $this;
    }

    public function read()
    {
        return "Je lis le livre $this->title écrit par $this->author";
    }

    
}
