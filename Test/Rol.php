<?php include('header.php');

if(!isset($_GET['pagina'])){header('Location:'. "rol.php?pagina=1");}
$offset = ($_GET['pagina'] -1) * 9;
$limit = 9 ;

$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');
$req = $database->prepare("SELECT * FROM gebruikers LIMIT :limit OFFSET :offset");//hier bereid ik voor om de producten toe tevoegen in mijn database	
	$req->bindValue(':limit', $limit, PDO::PARAM_INT);
	$req->bindValue(':offset', $offset, PDO::PARAM_INT);
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
							<a class="btn btn-info" href="delete.php?id=<?= $gebruiker['id']?>">X</a>
							<br><br><hr><br>
						</form>
					</div>	
				<?php endforeach; ?>	
				</div>
			<div class="col-md-12 pagination center-block">
			  <a href="http://localhost:100/php/test/rol.php?pagina=<?php if($_GET['pagina'] <= 1){echo '1';} else {echo $_GET['pagina'] -1;}?>">&laquo; Vorige</a>
			  <a href="http://localhost:100/php/test/rol.php?pagina=<?= $_GET['pagina'] + 1?>">Volgende &raquo;</a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php')?>