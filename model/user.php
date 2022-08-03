<?php
include_once "database.php";

function insertUser(array $user): bool {
    $db=dbConnect();
    $query= $db->prepare('insert into `users` (`firstname`, `name`, `email`, `password`) VALUES (:firstname, :name, :email, :password)');
    $user['password'] = password_hash($user['password'], PASSWORD_BCRYPT);
    $result=$query->execute($user);
    return $result;
}