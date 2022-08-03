<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>NOUS CONTACTER</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once "../includes/header.php";
    ?>
<h1 class="titre-contact">Écrivez-nous !</h1>

    <form class="p-2 p-lg-4" action="" method="post">


        <h2>Comment pouvons-nous vous aider ?</h2>
            
            <label for="prenom" class="label-input">Votre prénom</label>
            <input type="text" id="prenom" placeholder="Votre prénom">

            <label for="nom" class="label-input">Votre nom</label>
            <input type="text" id="nom" placeholder="Votre nom">

            <label for="email" class="label-input">Votre email</label>
            <input type="text" id="email" placeholder="Votre email*">

            <label for="text">Message</label>
            <textarea id="text" placeholder="Votre message*"></textarea>

            <button type="submit">Envoyer</button>

    </form>

    <?php
        include_once "../includes/footer.php";
    ?>
</body>

</html>
