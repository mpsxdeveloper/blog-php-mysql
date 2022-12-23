<?php

header("Content-Type: application/json; charset=utf-8");

require_once "../classes/User.php";
require_once "../classes/UserInvitation.php";
require_once "../dao/UserDAO.php";

$query = filter_input(INPUT_GET, "query");

if($query == "save") {
    $name = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $birthdate = filter_input(INPUT_POST, "birthdate");
    $user = new User();
    $user->setName($name);
    $user->setEmail($email);
    $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
    $user->setBirthday($birthdate);
    $userDAO = new UserDAO();
    $result = $userDAO->save($user);
    if($result == true) {
        echo json_encode(true);
    }
    else {
        echo json_encode(false);
    }
}
