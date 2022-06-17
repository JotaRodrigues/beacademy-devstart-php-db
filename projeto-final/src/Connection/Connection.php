<?php

    declare(strict_types=1);
    namespace App\Connection;

    abstract class Connection
    {
        public static function getConnection(): \PDO
        {
            // Fonecendo informação de acesso ao BD
            $database = 'db_store';
            $username = 'root';
            $password = '1234';
            
            // Criando uma conexão com o BD
            return new \PDO('mysql:host=localhost;dbname='.$database, $username, $password);
        }
    }