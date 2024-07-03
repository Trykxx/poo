<?php

require_once './Animal.php';

class Bird extends Animal
{
    private bool $migrate;

    public function __construct(string $nom, int $age, int $pattes, array $aliments, bool $migrate)
    {
        parent::__construct($nom, $age, $pattes, $aliments);
        $this->migrate = $migrate;
    }

    /**
     * Get the value of migrate
     */
    public function getMigrate()
    {
        return $this->migrate;
    }

    /**
     * Set the value of migrate
     *
     * @return  self
     */
    public function setMigrate($migrate)
    {
        $this->migrate = $migrate;

        return $this;
    }

    public function description():string
    {
        if ($this->migrate) {
            return "Je suis un oiseau migrateur";
        }else{
            return "Je ne suis pas un oiseau migrateur";
        }
    }
}
