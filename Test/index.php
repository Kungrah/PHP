
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<title>Home Page</title>
	</head>
		<body>
			<header>
			<?php
				include ('header.php');
			?>
			</header>
			<div class="container">
				<div class="row">
					<div class= "col-md-12 text-center">
						<h1>Home Pagina</h1>
						<hr>
						<p>Hier komt de informatie over de bedrijven</p>
					</div>
				</div>
				<div class="row text-center">
					<div class= col-md-4>
					<img src="img/bedrijf.jpg" alt="bedrijf" widht="200px" height="200px"/>
					</div>
					<div class= col-md-4>
					<img src="img/bedrijf.jpg" alt="bedrijf" widht="200px" height="200px"/>
					</div>
					<div class= col-md-4>
					<img src="img/bedrijf.jpg" alt="bedrijf" widht="200px" height="200px"/>
					</div>
				</div>
			</div>
			<?php
			include('footer.php');
			?>
		</body>
</html>
