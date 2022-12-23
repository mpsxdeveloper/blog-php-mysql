<?php

class User implements JsonSerializable {
    
    private $id;
    private $nome;
    private $email;
    private $password;
    private $birthdate;
    
    public function __construct() {
    }
    
    public function jsonSerialize() : mixed {
        $vars = get_object_vars($this);
        return $vars;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getBirthdate() {
        return $this->birthdate;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }
    
}
