<?php include('header.php');
$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');
$req = $database->prepare("SELECT * FROM gebruikers LIMIT :limit OFFSET :offset");//hier bereid ik voor om de producten toe tevoegen in mijn database	
	$req->bindValue(':limit', 9, PDO::PARAM_INT);
	$req->bindValue(':offset', 0, PDO::PARAM_INT);
	//Hier laat ik max 20 gebruikers per pagina zien.
	$req->execute();
	$gebruikers = $req->fetchAll();
?>

<?php
	if(
		isset($_POST['rolverstuur']) &&
		isset($_POST['rol']) &&
		($_POST['rol'] == 1 || $_POST['rol'] == 2 || $_POST['rol'] == 3) 

	){ 	
		try
		{
			$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
			$req = $database->prepare("UPDATE gebruikers SET rol = :rol
			 WHERE id = :id");//hier bereid ik voor om de producten toe tevoegen in mijn database	
				$req->execute([	
						":id" => $_POST['id'],	
						":rol" => $_POST['rol']
				]);
			header('Location:'. "rol.php");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	} 
?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
				<h1>Gebruiker Wijzigen</h1>
				<p><strong>Je kan gebruiker max 3 levels geven</strong></p><hr>
				<div class="row">
				<?php
					foreach ($gebruikers as $gebruiker) : ?>
					<div class="col-md-4">
						<form action="" method="POST">
							<label class="label-control" for="gebruiker">Gebruiker:</label>
							<input type="hidden" name="id" value="<?= $gebruiker['id']?>"/>

							<input class="form-control" type="text" id="gebruiker" name="gebruiker" disabled value="<?= $gebruiker['gebruiker']?>"/>
							<label class="label-control" for="rol">rol:</label>

							<input class="form-control" type="text" id="rol" name="rol" value="<?= $gebruiker['rol']?>"/><br>
							<input type="submit" name="rolverstuur" value="Rol aanpassen" class="btn btn-primary"/>
							<br><br><hr><br>
						</form>
					</div>
				<?php endforeach; ?>	
		</div>
	</div>
</div>
<?php include('footer.php')?>