<?php
session_start();
include_once ('core/functions.php');
include_once ('model/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>FANSTICKER</title>
</head>
<body class="filigrane" id="background">
<?php
include 'includes/header.php';
?>
<main>
<div class="container">
    <?php  if($_SESSION['firstname']) { ?>
       <center> <h1>Votre compte</h1> </center>
        <div class="container">
            <div class="profile">
                <div class="profile-box-l"><center>  <i class="fas fa-user"></i>   <b>Bonjour <?=$_SESSION['firstname']?> ! </b> </center></div>
                <div class="profile-box-r">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">N de commande </th>
                            <th scope="col">Image</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Quantité</th>
                        </tr>
                        </thead>
                        <tbody>

<?php
$order_list = GetOrders($_SESSION['user_id_s']);
?>

                        <?php foreach ($order_list as  $item) {?>
                                <?php $prod = GetProduct($item['id_product']); ?>
                            <tr>
                                <td><?= $item['id'] ?> </td>
                                <td><a href=""><img src="/<?= $prod['image'] ?>" alt="<?= $prod['name'] ?>" width="200"></a></td>
                                <td><a href=""><?= $prod['name'] ?></a></td>
                                <td><?= $prod['price'] ?></td>
                                <td><?= $item['qty'] ?></td>
                            </tr>
                        <?php } ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>



    <?php } else {?>
        <center style="color:red;">Vous devez vous identifier</center>
    <?php } ?>
</div>
</main>

<style>
    .profile {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .profile-box-l {
        width: 220px;
        margin: 30px auto;
        margin-top: 0px !important;
    }
    .profile-box-r , .profile-box-l {
        padding: 5px;
        border: solid 2px #f6f7f7;
    }
    .profile-box-l i {
        font-size: 30px;
    }
    .profile-box-r {
        flex: 1 1 auto;
        margin-left: 30px;
        padding: 10px;
    }
</style>

<?php
//include 'includes/footer.php';
?>

<?php
?>
<footer class="row justify-content-center no-gutter" style="margin-top: 40px;">
<ul class="col-12">
    <div class="col-1.5"></div>
    <section class="col-2">
        <h3>Informations Générales</h3>
            <li><a class="lien" href="identite.html">Qui sommes-nous ?</a></li>
            <li><a class="lien" href="mentions_legales.html">Mentions légales</a></li>
            <li><a class="lien" href="cgu.html">Conditions générales d'utilisation</a></li>
            <li><a class="lien" href="cgv.html">Conditions générales de vente</a></li>
            <li><a class="lien" href="donnees.html">Données personnelles</a></li>
            <li><a class="lien" href="livraison.html">Modes de livraison</a></li>
    </section>
    <section class="col-2">
        <h3>Parrainage</h3>
        <li><a class="lien" href="parrainage.html">Parrainez vos amis</a></li>
        <li><a class="lien" href="partenaires.html">Nos Partenaires</a></li>
    </section>
    <section class="col-3">
        <h3>Besoin d'aide ?</h3>
        <li><a class="lien" href="contact.php">Contactez-nous</a></li>
        <li><a class="lien" href="service_client.php">Service client</a></li>
        <li><a class="lien" href="service_client.php">Suivi de commande</a></li>
        <li><a class="lien" href="faq.php">FAQ</a></li>
        <img class="paiement" src="/dw18/fansticker/images/Visa-Logo-Transparent-Images.png" alt="Visa Mastercard">
    </section>
    <section class="col-2">
        <h3>Retrouvez-nous sur</h3>
        <img class="reseau1" src="/dw18/fansticker/images/linkedin.png" alt="linkedin">
        <img class= "reseau2" src="/dw18/fansticker/images/facebook-instagram-twitter.png" alt="logo facebook-instagram-tweeter">
    </section>
    <div class="col-1.5"></div>
</ul>
    <p>2022 © Fansticker. Tous droits réservés.</p>
</footer>

<!-- Modal -->
<div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Panier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-cart-content">

            </div>
        </div>
    </div>
</div>





<script src="cart.js"></script>
</body>
</html>