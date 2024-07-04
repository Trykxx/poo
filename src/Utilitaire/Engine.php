<?php
namespace App\Utilitaire;

use App\Entity\User;

interface Engine
{
    public function start(User $utilisateur);
}