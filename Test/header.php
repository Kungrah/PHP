<?php
session_start();
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
  <?php //Hier controleer ik mijn rol, waardoor hij 3 verschillende menu's heeft.
  if(isset($_SESSION['inschrijver'])){
      $rol = $_SESSION['inschrijver']['rol'];
      if ($rol >= 3){
       ?>
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
        </ul>
        <a class="nav-link" href="uitloggen.php">Uitloggen</a>
      </div>
    </nav>
    <?php
      }
      else
      {
         //Level 2 ?>
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
        </ul>
        <a class="nav-link" href="uitloggen.php">Uitloggen</a>
      </div>
    </nav>
    <?php
  }
      }
  else
  {
   //level 0 je bent niet ingelogd ?>
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
            <a class="nav-link" href="producten.php">productpagina</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="contact.php">Contact</a>
          </li>
        </ul>
        <a class="nav-link" href="aanmelden.php">Aanmelden</a>
        <a class="nav-link" href="registratie.php">Registreer</a>
      </div>
    </nav>
    <?php
  }
?>
</body>
</html>