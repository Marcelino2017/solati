<?php

class Connection
{
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $db = 'prueba';

    public static function connection(){        
        try {
            return mysqli_connect(self::$host, self::$username, self::$password, self::$db, 3306);    
        } catch (\Throwable $th) {
           return $th->getMessage();
        }
    }
}