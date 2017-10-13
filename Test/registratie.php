
<?php
	include ('header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1> Registratie</h1>
			<form action="" method="POST">
				<label class="label-control" for="voornaam"> Voornaam:</label>
				<input class="form-control" type="text" id="voornaam" name="voornaam"/> 
				<label class="label-control" for="achternaam">Achternaam:</label>
				<input class="form-control" type="text" id="achternaam" name="achternaam"/>
				<label class="label-control" for="adres">Adres:</label>
				<input class="form-control" type="text" id="adres" name="adres"/>
				<label class="label-control" for="postcode">Postcode:</label>
				<input class="form-control" type="text" id="postcode" name="postcode"/>
				<label class="label-control" for="plaats">Plaats:</label>
				<input class="form-control" type="text" id="plaats" name="plaats"/>
				<label class="label-control" for="email"> Your Email: </label>
				<input class="form-control" type="text" id="email" name="email"/>
				<label class="label-control" for= "gebruiker">Gebruikersnaam: </label>
				<input class="form-control" type="text" id="gebruiker" name="gebruiker"/>
				<label class="label-control" for="wachtwoord"> Wachtwoord: </label>
				<input class="form-control" type="password" id="wachtwoord" name="wachtwoord"/>
				<label class="label-control" for="herhaalwachtwoord">Herhaal wachtwoord:</label>
				<input class="form-control" type="password" id="herhaalwachtwoord" name="herhaalwachtwoord"/>
				<input type="submit" name="infoVerzenden" value="Sign Up"/>
			</form>
			<?php
				if(
					isset($_POST['infoVerzenden']) &&  //Als alles eerst is verstuurd dan pas wordt het versuutd
					isset($_POST['voornaam']) && !empty($_POST['voornaam']) && // Post 1: kijkt of de variabel voornaam bestaad dan is hij geset - Post2: kijkt of het veld niet leeg is.
					isset($_POST['achternaam']) && !empty($_POST['achternaam']) &&
					isset($_POST['adres']) && !empty($_POST['adres']) &&
					isset($_POST['postcode']) && !empty($_POST['postcode']) &&
					isset($_POST['plaats']) && !empty($_POST['plaats']) &&
					isset($_POST['email']) && !empty($_POST['email']) &&
					isset($_POST['gebruiker']) && !empty($_POST['gebruiker']) &&
					isset($_POST['wachtwoord']) && !empty($_POST['wachtwoord']) &&
					$_POST['wachtwoord'] == $_POST['herhaalwachtwoord']
				){ 								
					try
					{
						$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
						$req = $database->prepare("INSERT INTO gebruikers (id, voornaam, achternaam, adres, postcode, plaats, email, gebruiker, wachtwoord , rol ) values (:id, :voornaam, :achternaam, :adres, :postcode, :plaats, :email, :gebruiker, :wachtwoord, :rol)");//hier bereid ik voor om de producten toe tevoegen in mijn database	
							$req->execute([
									":id" => uniqid('',true),// hier vervangd hij de gegeven wat boven is vermeld met de waardes die ingevuld zijn: !!Voorbeeld $_POST['voornaam'] !!
									":voornaam" => $_POST['voornaam'],
									":achternaam" => $_POST['achternaam'],
									":adres" => $_POST['adres'],
									":postcode" => $_POST['postcode'],
									":plaats" => $_POST['plaats'],
									":email" => $_POST['email'],
									":gebruiker" => $_POST['gebruiker'],
									":wachtwoord" => $_POST['wachtwoord'],
									":rol" => 1
							]);
						echo "U bent geregistreed";
					}
					catch(PDOException $e)
					{
						echo $e->getMessage();
					}

				} else {
					echo "Voer uw gegevens in";
				}
			?>
		</div>
	</div>
</div>
<?php
	include('footer.php');
?>