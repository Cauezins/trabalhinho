<?php

    class Database{
        private static $host = 'localhost';
        private static $db = 'dados';
        private static $user = 'root';
        private static $pass = '1234';

        public static function conect(){
            try {
               $conexao = new PDO("mysql:host=".self::$host.";dbname=".self::$db, self::$user, self::$pass);
               return $conexao;
            } catch (PDOException $erro) {
                echo $erro;
            }
            
        }
    }
?>