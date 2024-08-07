<!-- name,price -->
<!-- constructeur -->
<!-- getter,setter -->
<!-- displayProduct : le produit est xxx et il coute -->

<?php
abstract class Article
{
    protected string $name;
    protected float $price;

    public function __construct($nom, $prix)
    {
        $this->name = $nom;
        $this->price = $prix;
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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    public function displayProduct()
    {
        return "Le produit est $this->name et il coute $this->price euros";
    }
}
