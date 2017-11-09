<?php include('header.php');
$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');
$req = $database->prepare("SELECT * FROM gebruikers WHERE id = :id ");//hier bereid ik voor om de producten toe tevoegen in mijn database	
	$req->execute([	
			":id" => $_SESSION['inschrijver']['id']	
	]);
	$gebruikers = $req->fetchAll()[0];
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<h1>Gebruiker Wijzigen</h1>
				<form action="" method="POST">
					<label class="label-control" for="voornaam">Voornaam:</label>
					<input class="form-control" type="text" id="voornaam" name="voornaam" value="<?= $gebruikers['voornaam']?>"/>

					<label class="label-control" for="achternaam">Achternaam:</label>
					<input class="form-control" type="text" id="achternaam" name="achternaam" value="<?= $gebruikers['achternaam']?>"/>

					<label class="label-control" for="adres">Adres:</label>
					<input class="form-control" type="text" id="adres" name="adres" value="<?= $gebruikers['adres']?>"/>

					<label class="label-control" for="postcode">Postcode:</label>
					<input class="form-control" type="text" id="postcode" name="postcode" value="<?= $gebruikers['postcode']?>"/>

					<label class="label-control" for="plaats">Plaats:</label>
					<input class="form-control" type="text" id="plaats" name="plaats" value="<?= $gebruikers['plaats']?>"/>

					<label class="label-control" for="email">E-mail:</label>
					<input class="form-control" type="text" id="email" name="email" value="<?= $gebruikers['email']?>"/>

					<label class="label-control" for="gebruiker">Gebruiker:</label>
					<input class="form-control" type="text" id="gebruiker" name="gebruiker" value="<?= $gebruikers['gebruiker']?>" disabled/>

					<label class="label-control" for="rol">Wachtwoord:</label>
					<input class="form-control" type="password" id="wachtwoord" name="wachtwoord" value="<?= $gebruikers['wachtwoord']?>"/>

					<input type="submit" name="artikelverstuur" value="Product Wijzigen"/>
				</form><br>
				<?php
					if(
						isset($_POST['artikelverstuur'])
					){ 	
						echo 'test';
						try
						{
							$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
							$req = $database->prepare("UPDATE gebruikers SET voornaam = :voornaam, achternaam = :achternaam, adres = :adres, postcode = :postcode, plaats = :plaats, email = :email, gebruiker = :gebruiker, wachtwoord = :wachtwoord
							 WHERE id = :id");//hier bereid ik voor om de producten toe tevoegen in mijn database	
								$req->execute([	
										":id" => $gebruikers['id'],	
										":voornaam" => $_POST['voornaam'],
										":achternaam" => $_POST['achternaam'],
										":adres" => $_POST['adres'],
										":postcode" => $_POST['postcode'],
										":plaats" => $_POST['plaats'],
										":email" => $_POST['email'],
										":gebruiker" => $_SESSION['inschrijver']['gebruiker'],
										":wachtwoord" => $_POST['wachtwoord']
								]);
							header('Location:'. "index.php");
						}
						catch(PDOException $e)
						{
							echo $e->getMessage();
						}
					} 
				?>
		</div>
	</div>
</div>
<?php include('footer.php')?>
