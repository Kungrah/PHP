<?php
	include ('header.php');
?>
<?php

//Login deel
if(
	isset($_POST["login"]) &&
	isset($_POST["login"]["gebruiker"]) &&
	isset($_POST["login"]["wachtwoord"])
)
{
	//Roept de functie op om verbinding te maken met de Database
	$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie

	//Maakt gebruiker aan in de tabel van de Database
	$req = $database->prepare('SELECT * FROM gebruikers WHERE gebruiker = :inlognaam');

	$req->execute([
		':inlognaam' => $_POST["login"]["gebruiker"]
	]);

	$result = $req->fetch();
	if(
		$_POST["login"]["wachtwoord"] == $result["wachtwoord"]
	){
		$_SESSION["inschrijver"] = $result;
		header('Location:'. "producten.php");exit;
	}else{
		$roepop ="Uw wachtwoord komt niet overheen";
	}
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3>Meld uw aan</h3>
			<form action="" method="post" >
				<input class="form-control" type="text" id="Gebruikersnaam" name="login[gebruiker]" placeholder="Gebruikersnaam" autofocus/>
				<br />
				<input class="form-control" type="password" id="Paswoord" name="login[wachtwoord]" placeholder="Paswoord"/>
				<br />
				<input class="btn btn-primary" type="submit" name="Aanmelden" value="Aanmelden" />
			</form>
			<br>
			<?php
				if(isset($_POST["Aanmelden"]))
				{
					echo $roepop;
					echo " <br><b><a href='registratie.php'>Registreer uw eigen hier</a></b>";
				}			
			?>
		</div>
	</div>
</div>
<?php
	include('footer.php');
?>