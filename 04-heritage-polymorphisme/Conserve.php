<?php

class Conserve extends Article
{
    private array $listExcipiant;

    public function __construct($name,$price,$listExcipiant)
    {
        parent::__construct($name,$price);
        $this->listExcipiant = $listExcipiant;
    }
    /**
     * Get the value of listExcipiant
     */
    public function getListExcipiant()
    {
        return $this->listExcipiant;
    }

    /**
     * Set the value of listExcipiant
     *
     * @return  self
     */

    public function setListExcipiant(array $listExcipiant)
    {
        $this->listExcipiant = $listExcipiant;

        return $this;
    }

    public function displayExcipiant(){

        return "La liste des excipiants dans le produit " .$this->name . " sont :" . implode(", ",$this->listExcipiant);
    }

}
