<?php

class Animal
{
    public string $name;
    public string $type;
    public int $age;

    function eat(){
        return "The animal is eating";
    }
    function sleep(){
        return "The animal is sleeping";
    }
}
