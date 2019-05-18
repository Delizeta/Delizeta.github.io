<?php
include 'navbar.html';
 ?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WijWhy | Home</title>



     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- style CSS -->
     <link rel="stylesheet" href="css/style.css">
     <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

  </head>
  <body class="homepage">

    <div class="container-fluid">
      <div class="row home-row align-items-center">
        <div class="home-title home-title-before d-none d-lg-block col-lg-4 offset-lg-2">
          <h1 class="title-h1">Wij is beter dan why.</h1>
          <h2 class="title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="home-img col-6 offset-3 col-md-4 offset-md-4 col-lg-3 offset-lg-1 col-xl-2">
          <img src="img/voorkant boek350x500.png" alt="Boek">
        </div>
        <div class="home-title home-title-after col-10 offset-1 d-lg-none">
          <h1 class="title-h1">Wij is beter dan why.</h1>
          <h2 class="title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
        </div>
        <div class="col-lg-5 offset-lg-1 home-buttons">
          <form action="#">
            <button type="submit" class="home-bestellen" name="button">Bestellen</button>
          </form>
          <form action="het-boek.php">
            <button type="submit" class="home-meer-info" name="button" >Meer info</button>
          </form>
        </div>
      </div>
    </div>


    <?php
    include 'footeryosha.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
