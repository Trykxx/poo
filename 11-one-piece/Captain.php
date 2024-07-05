<?php
require_once './Pirate.php';

final class Captain extends Pirate
{
    /**
     * @var string
     */
    private string $crewName;

    public function __construct(string $nom,int $age,int $prime,string $equipage)
    {
        $this->name=$nom;
        $this->age=$age;
        $this->bounty=$prime;
        $this->crewName=$equipage;
    }

    /**
     * @return string
     */
    public function getCrewName():string
    {
        return $this->crewName;
    }

    /**
     * Set the value of crewName
     *
     * @return  self
     */
    public function setCrewName($crewName):self
    {
        $this->crewName = $crewName;

        return $this;
    }
}
