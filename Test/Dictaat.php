
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	
		<title>Test PHP</title>
	</head>
		<body>
			<header>
			</header>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1> PHP opdrachten</h1>
							<?php
								if(isset($_POST['firstname']) && !empty($_POST['firstname'])) {
									$firstname = $_POST['firstname'];
								} else {
									$firstname = null;
								}	

								if(isset($_POST['lastname']) && !empty($_POST['lastname'])) {
									$lastname = $_POST['lastname'];
								} else {
									$lastname = null;
								}

								if(isset($_POST['email']) && !empty($_POST['email'])) {
									$email = $_POST['email'];
								} else {
									$email = null;
								}

								if(isset($_POST['re-email']) && !empty($_POST['re-email'])) {
									$reEmail = $_POST['re-email'];
								} else {
									$reEmail = null;
								}

								if(isset($_POST['password']) && !empty($_POST['password'])) {
									$password = $_POST['password'];
								} else {
									$password = null;
								}
								
							 ?>
							<form action="" method="POST">
								<label class="label-control" for="firstname"> First Name:</label>
								<input class="form-control" type="text" id="firstname" name="firstname"/> 
								<label class="label-control" for="lastname">Last Name:</label>
								<input class="form-control" type="text" id="lastname" name="lastname"/>
								<label class="label-control" for="email"> Your Email: </label>
								<input class="form-control" type="text" id="email" name="email"/>
								<label class="label-control" for= "re-email">Re-enter Email: </label>
								<input class="form-control" type="text" id="Re-enter Email" name="re-email"/>
								<label class="label-control" for="password"> New Password: </label>
								<input class="form-control" type="password" id="New Password" name="password"/>
								<input type="submit" name="infoVerzenden" value="Sign Up"/>
							</form>
							<?php
								if(isset($_POST['infoVerzenden'])){
									if($_POST['firstname'] && $_POST['lastname'] && $_POST['email']&& $_POST['re-email'] && $_POST['password']){
									echo "het werk";
								} else {
									echo "Het werkt niet";
								}
								}
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<br>
							<h2>If-Statement</h2>
							<form action"" method="POST">
								<label Class="label-control" for="GeldRemco"> Voer geld in: </label>
								<input class="form-control" type="text" id="GeldRemco" name="BankRemco"/>
								<input type="submit" name="geldVerzenden" value="Voer het bedrag in"/>
							</form>
							<?php
								if(isset($_POST['BankRemco']))
								{
									$BankRemco = $_POST['BankRemco'];
									if($BankRemco >= 1400)
									{
										echo "Remco heeft genoeg geld <br>";
										echo " Uw heeft: $BankRemco";
									}
									else
									{
										echo "Remco moet door sparen";
									}
								}
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<br>
							<h2>If else</h2>
							<form action="" method="POST">
								<label class="label-control" for="Bank"> Bank: </label>
								<input class="form-control" type="text" id="Bank" name="BankSaldo"/>
								<input type="submit" name="Bankverzenden" value="Voer het bedrag in"/>
							</form>
							<?php
								if(isset($_POST['BankSaldo']))
								{
									$BankSaldo = $_POST['BankSaldo'];
									if($BankSaldo > 1500)
									{
										echo"u kunt de Panasonic kopen";
									}
									elseif($BankSaldo > 100 && $BankSaldo <= 1500)
									{
										Echo"U kunt de Sont of Philips kopen";
									}
									elseif($BankSaldo > 500 && $BankSaldo <= 1000)
									{
										echo"U kunt de LG of Samsung kopen";
									}
									else
									{
										echo "U moet nog even doorsparen.";
									}
								}
							?>
						</div>	
					</div>

					<div class="row">
						<div class="col-md-12">
							<br>
							<h2>Switch</h2>
							<form action="" method="POST">
								<label class="" for="Kleuren"> Kleuren:</label>
								<input class="form-control" type="text" id="kleurr" name="kleur"/>
								<input type="submit" name="kleurverzenden" Value="Voer het bedrag in"/>
							</form>
							<?php
								if(isset($_POST['kleur']))
								{
									switch($_POST['kleur'])
									{
										case "rood": echo "De kleur komt overeen met een Sucuk";
										break;
										case "groen": echo "De kleur komt overeen met een Kiwi";
										break;
										case "geel": echo "De kleur komt overeen met Banaan";
										break;
										case "oranje": echo "De kleur komt overeen met een Sinaasappel";
										break;
										case "paars": echo "De kleur komt overeen met een Druif";
										break;
										default: echo "We kunnen geen stukje fruit vinden";
									}
								}
							?>
						</div>
					</div>
					<br>

					<div class="row">
						<div class="col-md-12">
							<br><h2>For Loop</h2>
							<?php
								for($variable = 1; $variable <= 10; $variable++)
								{
 									echo $variable ."<br>";				
								}

								 echo "<br><h2>Array uit lezen met een For loop</h2>";
								$names = array('Glenn', 'Rens', 'Simone', 'Muhammed');
									for($x = 0; $x <= count($names) -1; $x++)
									{
										echo $names[$x]. "<br>";
									}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br><h2>For loop gebruiken met While Loop</h2>
							<?php
								$bankSaldo = 1;
								while($bankSaldo <= 10)
								{
									$bankSaldo++;
									echo "sucuk". "<br>";
								}
							?>

							<br>
							<h2>While Loop</h2>
							<form action="" method="POST">
								<label class="" for="saldo"></label>
								<p>Begin saldo</p>
								<input class="form-control" type="text" id="saldo1" name="saldo"/>
								<p>Bedrag wat je wilt gaan sparen</p>
								<input class="form-control" type="text" id="saldo2" name="saldoberekening"/>
								<input type="submit" name="bedragverzenden" Value="Voer het bedrag in"/>
							</form>
							<?php
								if(isset($_POST['saldo']) && isset($_POST['saldoberekening']))
								{
									$saldo = $_POST['saldo'];
									$aantalMaanden = 0;
									while($saldo <= $_POST['saldoberekening'])
										{
											$saldo = $saldo + 50;
											$saldo = $saldo * 1.08;
											$aantalMaanden++;
										}
										echo "Je moet " .$aantalMaanden . " maanden lang sparen";
								}
							?>
						</div>
					</div>
						<div class="row">
							<div class="col-md-12">
							<br><h2>Array</h2>
								<?php
								$inhoudDoosje = array("Rood","Geel","Groen","Blauw");
									echo $inhoudDoosje[0]."<br>";
									echo $inhoudDoosje[1]."<br>";
									echo $inhoudDoosje[2]."<br>";
									echo $inhoudDoosje[3]."<br>";
								?>

								<br><h3>Array uitlezen met een For Loop</h3>
								<?php
								for($n = 0; $n < sizeof ($inhoudDoosje); $n++)
									{
	 									echo $inhoudDoosje[$n] ."<br>";				
									}
								?>

								<br><h3>Foreach</h3>
								<?php
								foreach ($inhoudDoosje as $val){
									echo $val."<br>";
								}
								?>

								<br><h3>Associatief Array</h3>
								<?php
								$persoon = array("Voornaam" => "Muhammed",
												"Achternaam" => "Ozdemir",
												"Plaatsnaam" => "Oss");

									echo $persoon["Voornaam"]."<br>"; //Toont Kees op het scherm in plaats van Muhammed
									echo $persoon["Achternaam"]."<br>"; //Toont Ozdemir op het scherm in plaats van Achternaam
									echo $persoon["Plaatsnaam"]."<br>"; //Toont Oss in plaats van Plaatsnaam

									echo "<br><h4>Foreach</h4>";
									foreach ($persoon as $lab){
										echo $lab."<br>";
									}
								?>
								<br><h2>Multidimensionaal Array</h2>
								<?php
								$gegevens = array(array("Voornaam" => "Muhammed 1",
														"Achternaam" => "Ozdemir 1",
														"Plaatsnaam" => "Oss 1"),
													array("Voornaam" => "Muhammed 2",
														"Acternaam" => "Ozdemir 2",
														"Plaatsnaam" => "Oss 2"),
													array("Voornaam" => "Muhammed 3",
														"Achternaam" => "Ozdemir 3",
														"Plaatsnaam" => "Oss 3")
												);
									echo $gegevens[0]["Voornaam"]."<br>";
									echo $gegevens[1]["Voornaam"]."<br>";
									echo $gegevens[2]["Voornaam"]."<br>";

									echo "<br><h3>Foreach</h3>";

									foreach ($gegevens as $tes){
										foreach ($tes as $pas){
											echo $pas."<br>";
										}
									}
								?>
						</div>
					</div>
					<div class ="row">
						<div class="col-md-12">
							<br><h2>Require en Include</h2>
							<?php
								include('contact.php');
								require('contact.php');
							?>	
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br><h2>Function</h2>
							<?php
							function toonGegevens()// hier heb ik een functie gemaakt
							{
								echo "Ik heet Muhammed";
							}
							toonGegevens();//Hier haal ik de function die ik heb gemaakt op
							?>

							<br><h3>key in value geven</h3>
							<?php
							

							function naamAanpassen($naam)
							{
								echo "Mijn naam is ".$naam;
							}
							naamAanpassen('Muhammed');
							?>
							
							<br><h3>functie parameters</h3>
							<?php
							$getal1 = 10;
							$getal2 = 5;
							function optellen($getal1,$getal2) //Getallen tussen de () haakjes noemen we Parameters
							{
								$totaal = $getal1 + $getal2;
								return $totaal;
							}
							$uitkomst = optellen($getal1,$getal2);
							echo "Uitkomst is ".$uitkomst;
							?>

							<br><h3>Optionele parameters</h3>
							<?php
							function toonAntwoord($extra = NULL) // Parameter $extra is nu Leeg (NULL)
							{
								echo "Kees de Groot <br>";
								echo "Pietjestraat 1 <br>";
								echo " postcode bl Oss <br>"; //dit gaat hij standaard uitvoeren

								if(!empty($extra)) //De functie !empty betekend Niet leeg.
								 //Zodra er een Parameter tijdens het oproepen meegegeven wordt gaat hij dit ook erbij uitvoeren.
								{
									echo "kees mail <br>";
									echo "Telefoonnummer <br>";
								}
							}
							toonAntwoord();	//Er wordt geen parameter meegegeven					
							?>
							<br>
							<h5>Hier wordt een parameter mee gegeven</h5>
							<?php
							toonAntwoord('Parameter'); //Hier wordt een parameter ingevuld dus de waarde is niet meer NULL(LEEG).
							?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<br><h3>Sessions</h3>
							<?php
							$_SESSION['string'] = 'PHP is leuk';
							$_SESSION['int'] = 35;
							

							echo $_SESSION['string'];
							$getal = $_SESSION['int']; //laa
							echo " <br>$getal";

						

							?>
						</div>
					</div>
					<br>
			<footer>
			</footer>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
			    </script>
		</body>
</html>
