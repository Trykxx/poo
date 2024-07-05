<?php

abstract class Character
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var int
     */
    protected int $age;

    /**
     * @var int
     */
    protected int $bounty;

    abstract public function getRole():string;

    public function getInfo(): string
    {
        return "$this->name, $this->age, $this->bounty";
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
     * Get the value of bounty
     */
    public function getBounty()
    {
        return $this->bounty;
    }

    /**
     * Set the value of bounty
     *
     * @return  self
     */
    public function setBounty($bounty)
    {
        $this->bounty = $bounty;

        return $this;
    }
}
