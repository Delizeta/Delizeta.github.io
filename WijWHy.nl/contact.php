<?php
include 'navbar.html';
?>
<!doctype html>
<html lang="nl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Onze CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>WijWhy | Contact</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-xl-4">
          <div class="persoon1">
            <img src="https://via.placeholder.com/259x259" class="img-circle contact-pf contact-container">
            <div class="contact-info">
             <img src="img/icons/user.svg" alt="">
             <span>Alfred Schmits</span>
             <br>
             <img src="img/icons/location.svg" alt="">
             <span>Duffeltdijk 9, 6579 JD Kekerdom</span>
             <br>
             <img src="img/icons/mobile.svg" alt="">
             <span>+31 655 157 572</span>
             <br>
             <img src="img/icons/at.svg" alt="">
             <span> <a href="mailto:info@theconsciouscompany.com">info@theconsciouscompany.com</a></span>
             <br>
             <img src="img/icons/linked-in.svg" alt="">
             <span><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/alfred-schmits-5523333/">Linked In</a></span>
           </div>

          </div>

        </div>

        <div class="col-12 col-xl-4">
          <div class="persoon1">
            <img src="https://via.placeholder.com/259x259" class="img-circle contact-pf">
            <div class="contact-info">
             <img src="img/icons/user.svg" alt="">
             <span>Paul van Schaik</span>
             <br>
             <img src="img/icons/location.svg" alt="">
             <span>Dobberhof 16, 1121 PB LANDSMEER</span>
             <br>
             <img src="img/icons/mobile.svg" alt="">
             <span>+31 128 246 28</span>
             <br>
             <img src="img/icons/at.svg" alt="">
             <span><a href="mailto:ppaulvanschaik@gmail.com">ppaulvanschaik@gmail.com </a></span>
             <br>
             <img src="img/icons/linked-in.svg" alt="">
             <span><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/alfred-schmits-5523333/">Linked In</a></span>
           </div>
          </div>
          </div>


        <div class="col-12 col-xl-4">
          <div class="persoon1">
            <img src="https://via.placeholder.com/259x259" class="img-circle contact-pf">
            <div class="contact-info">
             <img src="img/icons/user.svg" alt="">
             <span>Dennis Stout</span>
             <br>
             <img src="img/icons/location.svg" alt="">
             <span>Markt 47, 3131 CR Vlaardingen</span>
             <br>
             <img src="img/icons/mobile.svg" alt="">
             <span>+31 629 598 592</span>
             <br>
             <img src="img/icons/at.svg" alt="">
             <span> <a href="mailto:ennisstout@hotmail.com">ennisstout@hotmail.com</a></span>
             <br>
             <img src="img/icons/linked-in.svg" alt="">
             <span><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/dennis-stout-1147b13/">Linked In</a></span>
           </div>
          </div>
        </div>
      </div>

      <div class="row form">
        <div class="col-12">
          <h2 class="form-title">Neem contact op</h2>

          <form class="contact" action="index.html" method="post">
            <input type="text" id="voornaam" name="voornaam" placeholder="Naam"><br>

            <input type="text" id="voornaam" name="voornaam" placeholder="Onderwerp"><br>

            <textarea id="subject" name="subject" placeholder="Bericht" style="height:200px"></textarea><br>

            <button type="submit" name="submit">Verzend</button>

          </form>
        </div>
      </div>
    </div>

    <?php
    include 'footeryosha.php';
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
