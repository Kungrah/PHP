<?php include('header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<h1>Product Toevoegen</h1>
				<form action="" method="POST">
					<label class="label-control" for="artikelaantal">Artikelaantal:</label>
					<input class="form-control" type="text" id="artikelnummer" name="artikelaantal"/>

					<label class="label-control" for="artikelnaam">Artikelnaam:</label>
					<input class="form-control" type="text" id="artikelnaam" name="artikelnaam"/>

					<label class="label-control" for="artikelprijs">Artikelprijs:</label>
					<input class="form-control" type="text" id="artikelprijs" name="artikelprijs"/>

					<label class="label-control" for="artikel_afbeelding">Artikel Afbeelding:</label>
					<input class="form-control" type="text" id="artikel_afbeelding" name="artikel_afbeelding"/>

					<input type="submit" name="artikelVerzenden" value="Product Toevoegen"/>
				</form><br>
				<?php
					if(
						isset($_POST['artikelVerzenden']) &&  //Als alles eerst is verstuurd dan pas wordt het versuutd
						isset($_POST['artikelaantal']) && !empty($_POST['artikelaantal']) && // Post 1: kijkt of de variabel voornaam bestaad dan is hij geset - Post2: kijkt of het veld niet leeg is.
						isset($_POST['artikelnaam']) && !empty($_POST['artikelnaam']) &&
						isset($_POST['artikelprijs']) && !empty($_POST['artikelprijs']) &&
						isset($_POST['artikel_afbeelding']) && !empty($_POST['artikel_afbeelding'])
					){ 	
						try
						{
							$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
							$req = $database->prepare("INSERT INTO artikel (Artikel_ID, Artikelaantal, Artikelnaam, Artikelprijs, Artikel_afbeelding) values (:Artikel_ID, :Artikelaantal, :Artikelnaam, :Artikelprijs, :Artikel_afbeelding)");//hier bereid ik voor om de producten toe tevoegen in mijn database	
								$req->execute([
										":Artikel_ID" => uniqid('',true),
										":Artikelaantal" => $_POST['artikelaantal'],
										":Artikelnaam" => $_POST['artikelnaam'],
										":Artikelprijs" => floatval (str_replace(',', '.', $_POST['artikelprijs'])),
										":Artikel_afbeelding" => $_POST['artikel_afbeelding']
								]);
							echo "Product is toegevoegd";
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