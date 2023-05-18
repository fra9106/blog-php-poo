<?php

namespace App\src\DAO;

use PDO;
use Exception;

class DAO 
{
    private static $instance = null;

    public static function getPdo()
    {
        try {
        
            if (self::$instance === null)
            self::$instance = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

            return self::$instance;
        }
    catch (Exception $errorConnexion) 
    {
        die ('Erreur de connection :'.$errorConnexion->getMessage());
    }
}
    
}
