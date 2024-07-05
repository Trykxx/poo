<?php

require_once './Character.php';

class CharacterManager
{
    protected array $characters = [];

    public function addCharacter(Character $character)
    {
        $this->characters[] = $character;
    }

    public function listCharacters()
    {
        foreach ($this->characters as $character) {
            echo $character->getName();
        }
    }

    /**
     * Get the value of characters
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Set the value of characters
     *
     * @return  self
     */
    public function setCharacters($characters)
    {
        $this->characters = $characters;

        return $this;
    }
}
