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
    <link rel="stylesheet" href="../css/en_vedette.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>EN VEDETTE</title>
    <title>EN VEDETTE</title>
  </head>
<body class="filigrane" id="background">
    <?php 
      include '../includes/header.php'; 
    ?>
    <main>
      <!-- Carousel début-->
      <div id="carouselExampleCaptions"  class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="dimension" src="../images/Carousel/father_day_2.jpg" width="612" height="270" class="d-block w-100" alt="fête des pères">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="color_carousel">Pour sa fête,</h5>
              <h5 class="color_carousel">pensez à un sticker pour lui faire plaisir</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="../images/Carousel/mother_day_612x612.jpg" width="612" height="270" class="d-block w-100" alt="fête des mères">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="dimension" src="../images/Carousel/valentine_day_612x612.jpg" width="612" height="270" class="d-block w-100" alt="saint-valentin">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </br>
      <!--Carousel fin-->
      <section>
      <h2 class="titre_vedette">LE THÈME DU MOMENT</h2>
        <div class="row">
          <article>
            <figure>
              <div class="img_bis">
                <img src="../images/Stickers - En Vedette/étiquette carrée haute - père1.png" width=70% alt="sticker père 1">
              </div>
              <figcaption>
                <h3>Sticker carré fête des pères</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
                <img src="../images/Stickers - En Vedette/étiquette ovale - père2.png" alt="sticker père 2">
              </div>
              <figcaption>
                <h3>Sticker long fête des pères</h3>
                <p>Lot de 6 stickers<br>Taille : L 6 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
                <img src="../images/Stickers - En Vedette/étiquette ronde - père3.png" alt="sticker père 3">
              </div>
              <figcaption>
                <h3>Sticker rond fête des pères</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
        </div>
    </section>
    <section>
      <h2 class="titre_vedette">VOS STICKERS PRÉFÉRÉS</h2>
        <div class="row">
          <article>
            <figure>
              <div class="img_bis">
                <img src="../images/Stickers - En Vedette/étiquette carrée haute - mère1.png" alt="sticker mère 1">
              </div>
              <figcaption>
                <h3>Sticker carré fête des mères</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
              <img src="../images/Stickers - En Vedette/étiquette ovale - mère2.png" alt="sticker mère 2">
              </div>
              <figcaption>
                <h3>Sticker long fête des mères</h3>
                <p>Lot de 6 stickers<br>Taille : L 6 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src="../images/Stickers - En Vedette/étiquette ronde - mère3.png" alt="sticker mère 3">
              </div>
              <figcaption>
                <h3>Sticker rond fête des mères</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcation>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src="../images/Stickers - En Vedette/étiquette carrée haute - stvalentin1.png" alt="sticker saint valentin 1">
              </div>
              <figcaption>
                <h3>Sticker carré Saint-Valentin</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img">
              <img src="../images/Stickers - En Vedette/étiquette ovale - stvalentin2.png" alt="sticker saint valentin 2">
              </div>
              <figcaption>
                <h3>Sticker long Saint-Valentin</h3>
                <p>Lot de 6 stickers<br>Taille : L 6 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
          <article>
            <figure>
              <div class="img_bis">
              <img src=".//images/Stickers - En Vedette/étiquette ronde - stvalentin3.png" alt="sticker saint valentin 3">
              </div>
              <figcaption>
                <h3>Sticker rond Saint-Valentin</h3>
                <p>Lot de 6 stickers<br>Taille : L 4 cm, H 4 cm<br>Prix: 4€99</p>
                <label for="panier" class="label-input">Quantité</label>
                <input type="number" id="panier" min="1" max="10" required>
                <button onclick="fpanier()">Ajouter au panier</button>
              </figcaption>
            </figure>
          </article>
      </section>
    <script src="../panier.js"></script>
    </main>
    <?php
      include '../includes/footer.php';
    ?>
</body>
</html>