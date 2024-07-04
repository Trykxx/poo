<?php

namespace App\Utils;

class Autoloader
{
    public static function autoload()
    {
        spl_autoload_register(function($a){ // register va sauvegarder ma fonction pour la declencher a chaque fois qu'elle trouve pas le chemin de ma classe.
            // $a est le nom de notre classe 'App\Entity\Bd' => son namespace
            echo $a . '<br>';

            $path = "$a.php";
            $path = str_replace('App','',$path);
            echo $path .'<br>';
            $path = str_replace('\\',DIRECTORY_SEPARATOR,$path);
            echo $path .'<br>';
            echo __DIR__ .'<br>';
            $dirPath = str_replace(DIRECTORY_SEPARATOR . "Utils",'',__DIR__);
            echo $dirPath .'<br>';


            require_once $dirPath . $path;
        });
    }

    private static function register(){

    }
}