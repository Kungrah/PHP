<?php
include('header.php');
$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');
	$req = $database ->prepare("SELECT * FROM artikel");
	$req ->execute();
	$artikelen = $req -> fetchall();
?>

<div class="container">
	<div class="row"> 
		<div class="col-md-12">
			<?php if(levelCheck(2)) { ?>
				<br>
	           <a class="btn btn-info" href="producttoevoegen.php">Product Toevoegen +</a>
	          <?php }?>
	    </div>
	</div><br>
	<div class="row">
		<?php
		foreach ($artikelen as $artikel) {?>
			<div class="col-md-3 col-lg-3">
				<?php if(levelCheck(2)) { ?>
				<a class="btn btn-info" href="productwijzig.php?Artikel_ID=<?= $artikel['Artikel_ID']?>">Wijzig</a>
				 <a class="btn btn-info" href="delete.php?Artikel_ID=<?= $artikel['Artikel_ID']?>">X</a>
				 <?php } ?>
				<h3><?= $artikel['Artikelnaam']?></h3>
				<p> Prijs: <?= $artikel['Artikelprijs']?></p>
				<img src="<?= $artikel['Artikel_afbeelding']?>" alt="Logo" height="250px" width="250px">
				<div class="form-group">
		  			<label for="comment">Opmerking:</label>
		  			<textarea class="form-control" rows="6" id="comment"></textarea>
				</div>
			</div>
		<?php }?>
	</div>
</div>
<?php
include('footer.php');
?>
