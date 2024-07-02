<?php

class Aliment extends Article
{
    /**
     * @var string
     */
    protected string $datePeremption;

    public function __construct($name,$price,$date)
    {
        parent::__construct($name,$price);
        $this->datePeremption = $date;
    }

    /**
     * Get the value of datPeremption
     */
    public function getDatePeremption()
    {
        return $this->datePeremption;
    }

    /**
     * Set the value of datPeremption
     *
     * @return  self
     */
    public function setDatePeremption($datePeremption)
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    function displayProduct(){
        return parent::displayProduct() . " et la date de péremption est le $this->datePeremption";
    }
}
