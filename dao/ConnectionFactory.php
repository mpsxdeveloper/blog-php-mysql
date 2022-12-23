<?php

class ConnectionFactory {
    
    public function __construct() {
    }
     
    public static function connect() {

        $dbname = "blog-php-mysql";
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "root";
        $connection = null;
        try {
            $connection = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpassword);
        }
        catch(PDOException $e) {
            die($e->getMessage());
        }
        return $connection;
    }
     
    public static function disconnect($conn) {
        $this->connection = $conn;
    }

}
