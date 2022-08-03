<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/connexion.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>EN VEDETTE</title>
    <title>CONNEXION</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once '../includes/header.php';
    ?>
    <main>
        <section>
            <h2>Bienvenue</h2>
            <div class="formulaire">
                <form action="/dw18/fansticker/login.php" method="post">
                    <h3>Se connecter</h3>
                    <label for="email" class="label-input">Email</label>
                    <input type="email" class="formulaire_contact" name="email" id="email" placeholder="Adresse email">
                    <label for="password" class="label-input">Mot de passe</label>
                    <input type="text" class="formulaire_contact" name="password" id="password" placeholder="Mot de passe">
                    <div class="btn-div-connexion">
                        <input type="submit" name="login" value="Connexion" class="btn-submit">
                    </div>
                </form>
            </div>
            <p class="forgot"><a href="#">Mot de passe oublié ?</a></p>
        </section>
        <section>
            <div></br></div>
            <div>
                <h2>S'inscrire</h2>
                <div class="btn-div-connexion">
                    <button type="input" class="btn-subscribe"><a class="link-color" href="inscription.php">Je m'inscris</a></button>
                </div>
                <div></br></div>
            </div>
        </section>
    </main>
    <?php
        include '../includes/footer.php';
    ?>
</body>
</html>