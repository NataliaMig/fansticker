<?php
session_start();
include_once ('core/functions.php');
include_once ('model/database.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $query = $pdo->prepare("SELECT * FROM user WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">Cet utilisateur exixte déjà</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id_s'] = $result['user_id'];
            $_SESSION['firstname'] = $result['firstname'];
            echo '<p class="success">Félicitations vous êtes bien identifés</p> ';
            echo '<meta http-equiv="refresh" content="4; url=/dw18/fansticker/view/accueil.php" />';
        } else {
            echo '<p class="error"> Login ou mot de passe erronnées</p>';
        }
    }
}

?>

