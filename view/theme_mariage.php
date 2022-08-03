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
    <link rel="stylesheet" href="../css/theme_mariage.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="../cart.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <title>THÈME MARIAGE</title>
</head>
<body class="filigrane" id="background">
    <?php
        include_once "../includes/header.php";
    ?>

    <main>

        <div class="container">
        <section>

        <h2 class="titre_vedette">MARIAGE</h2>

            <div class="row prd-cat-row">
                <?php $products = GetProducts('mariage');?>
                <?php foreach ($products as $product) { ?>
                    <article class="col-md-4" style="padding: 10px;">
                        <figure>
                            <div class="img_bis">
                                <img src="/dw18/fansticker/<?= $product['image'] ?>" alt="sticker carré mariage romantique">
                            </div>
                            <figcaption class="sh-figcaption">
                                <h3><?= $product['name'] ?>  </h3>
                                <p>Lot de 6 stickers : <?= $product['price'] ?>€<br>Taille : L <?= $product['width'] ?> cm, H <?= $product['height'] ?> cm</p>
                                <label for="panier" class="label-input">Ajouter au panier</label>
                                <input type="number" id="panier" min="1" max="10"   class="<?= $product['sticker_id'] ?>" required>
                                <button id="get-cart" class="add-to-cart" data-id="<?= $product['sticker_id'] ?>">Valider</button>
                            </figcaption>
                        </figure>
                    </article>

                <?php } ?>

                <?php
                //session_destroy()
                ?>

            </div>








        </section>
        </div>


    </main>
    <?php
        include_once "../includes/footer.php";
    ?>



</body>

</html>