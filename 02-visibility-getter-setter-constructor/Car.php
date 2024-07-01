<?php
// VISIBILITE (public, private, protected)
//    - public : accessible depuis l'exterieur et l'interieur de la classe.
//    - private : accessible uniquement depuis l'interieur de la classe.
//    - protected : accessible depuis l'interieur de la classe et depuis les classes enfants.

// Encapsulation est le fait de rendre privé les propriétés ou les methodes d'une classe
// pour empecher l'exterieur de modifier ou de lire les propriétés d'une classe.
// Pour accéder aux propriétés privées d'une classe, on utilise les getters et les setters.

// Un getter (accesseur) est une methode qui permet de récupérer la valeur d'une propriété privée.
// Un setter (mutateur) est une méthode qui permet de modifier la valeur d'une propriété privée.
// creer une classe car, model,color,date,
// display() : le vehicule est une xxx de couleur xxx sortie en xxx

class Car
{
    private string $model;

    private string $color = 'blanc';

    private int $date = 2024;

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function display()
    {
        return "Le vehicule est une $this->model, de couleur $this->color sortie en $this->date";
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
