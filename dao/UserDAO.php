<?php

require_once "ConnectionFactory.php";
require_once "../classes/User.php";

class UserDAO {
    
    public function save(User $user) {
        
        try {
            $connection = ConnectionFactory::connect();
            $sql = "INSERT INTO users (name, email, password, birthdate) VALUES (:name, :email, :password, :birthdate)";
            $rs = $connection->prepare($sql);
            $rs->bindValue(":name", $user->getName());
            $rs->bindValue(":email", $user->getEmail());
            $rs->bindValue(":password", $user->getPassword());
            $rs->bindValue(":birthdate", $user->getBirthdate());
            $rs->execute();
            if($rs->rowCount() > 0) {
                return true;
            }
            else {
                return false;
            }
        }
        catch(PDOException $e) {
            $e->getMessage();
        }
    }
    
}
