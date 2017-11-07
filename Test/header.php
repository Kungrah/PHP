<?php
session_start();
include_once('config.php');
?>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title></title>
  </head>
<body>
  <header>
  </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">
      <img src="img/gs.png" alt="Logo" height="42" width="42">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="producten.php">Producten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contact.php">Contact</a>
          </li>
          <?php if(levelCheck(3)) { ?>
            <li class="nav-item">
              <a class="nav-link disabled" href="rol.php">Alle gebruikers</a>
            </li>
          <?php } ?>
        </ul>
          <?php //Als de gebruiker gelijk aan of hoger dan rol 1 heeft krijgt hij deze menu te zien. ?>
          <?php if(levelCheck(1)) { ?>
              <a href="gebruiker.php"><?php echo $_SESSION['inschrijver']['7'];?></a>
            | <a href="uitloggen.php">Uitloggen</a>
          <?php } 
          else { ?>
            <a href="aanmelden.php">Inloggen</a>
           | <a href="registratie.php">Registreer</a>
          <?php } ?>
      </div>
    </nav>
</body>
</html>