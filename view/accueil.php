<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css?ver=<?= rand(1,100); ?>">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/accueil.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>ACCUEIL</title>
</head>

<body class="filigrane" id="background">
    <?php 
      include   '../includes/header.php';
    ?>
    <main>

<div class="container">

    <div class="titre">   
           
         <h1>BIENVENUE SUR FANSTICKER</h1>
    </div>
      
        <nav>
        <?php include  '../includes/caroussel.php';  ?>
        </nav>
     
       
      <section>
      
      <div class="sous_titre"> 
      <h2><a href="/dw18/fansticker/view/faq.php">CREEZ ET COLLEZ!</a></h2>
      </div>

          <div class="row">
              <article class="col-md-3">
                  <figure id="first sh-art">
                      <img src="../images/images_accueil/stickersacc.png"   alt="exemple stickers">
                      <figcaption>
                          <h3>Choisissez</h3>
                      </figcaption>
                  </figure>
              </article>


              <article class="col-md-3">
                  <figure id="first">
                      <img src="../images/images_accueil/unknown.png"  alt="exemple stickers">
                      <figcaption>
                          <h3>Adaptez</h3>
                      </figcaption>
                  </figure>
              </article>
              <article class="col-md-3">
                  <figure id="first">
                      <img src="../images/images_accueil/luggage.jpg"   alt="exemple stickers">
                      <figcaption >

                          <h3>A vous de choisir</h3>
                      </figcaption>
                  </figure>
              </article>
          </div>

          <div class="sous_titre">
              <h2><a href="/dw18/fansticker/view/en_vedette.php">LARGE CHOIX</a></h2>
          </div>

          <div class="row">
              <article class="col-md-3">
                  <figure id="second">
                      <img src="../images/images_accueil/cadeau.jpg" width="200" height="200" alt="papier">
                      <figcaption>
                          <h3>Offrez votre cadeau</h3>
                      </figcaption>
                  </figure>
              </article class="col-md-3">
              <article>
                  <figure id="second">
                      <img src="../images/images_accueil/small_fille.jpg" width="200"  alt="satisfaction">
                      <figcaption>
                          <h3>100% Satisfaction</h3>
                      </figcaption>
                  </figure>
              </article>
          </div>

          <div class="sous_titre">
              <h2><a href="/dw18/fansticker/view/service_client.php">QUALITE IRREPROCHABLE</a></h2>
          </div>

          <div class="row">
              <article class="col-md-3">
                  <figure id="second">
                      <div>
                          <img src="../images/images_accueil/quality.png" width="200" height="200" alt="papier">
                      </div>
                  </figure>
              </article>
          </div>


      </section>

</div>

    </main>
    <?php
      include '../includes/footer.php';
    ?>

    <style>
        #sh-art {
            display: flex !important;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="../cart.js"></script>

</body>
</html>