<?php

// Une interface est un contrat qui permet de définir des méthodes que les classes qui les implementeront devront implementer

interface Guerison
{
    public function reanime():void;

    public function nourrir(int $nourriture):int;
}