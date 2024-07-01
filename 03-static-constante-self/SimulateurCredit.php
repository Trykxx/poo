<?php

class SimulateurCredit
{
    public const TAUX = 20.5;

    public static float $quotient =0.2;

    public static function calculInteret(int $pret):float
    {
        return $pret * self::$quotient;
    }
}