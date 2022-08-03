<?php
session_start();
include_once ('core/functions.php');
include_once ('model/database.php');

if (isset($_POST['register'])) {
    global $pdo;
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $query = $pdo->prepare("SELECT * FROM user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">Ce mail existe déjà</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $pdo->prepare("INSERT INTO user(firstname,password,email,name) VALUES (:firstname,:password_hash,:email,:name)");
        $query->bindParam("firstname", $firstname, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Identification bien réussie</p>';
            echo '<meta http-equiv="refresh" content="4; url=/dw18/fansticker/view/connexion.php" />';
        } else {
            echo '<p class="error">Données erronnées</p>';
        }
    }
}