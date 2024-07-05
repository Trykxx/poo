<?php
namespace App\Entity;

final class User
{
    protected string $pseudo;
    protected bool $blessure;

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of blessure
     */
    public function getBlessure()
    {
        return $this->blessure;
    }

    /**
     * Set the value of blessure
     *
     * @return  self
     */
    public function setBlessure($blessure)
    {
        $this->blessure = $blessure;

        return $this;
    }
}
