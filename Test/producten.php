<?php
include('header.php');
if(!isset($_GET['pagina'])){header('Location:'. "producten.php?pagina=1");}
$offset = ($_GET['pagina'] -1) * 8;
$limit = 8 ;
$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');
	$req = $database ->prepare("SELECT * FROM artikel LIMIT :limit OFFSET :offset");
	$artikelen = $req -> fetchall();
	$req->bindValue(':limit', $limit, PDO::PARAM_INT);
	$req->bindValue(':offset', $offset, PDO::PARAM_INT);
	$req->execute();
	$artikelen = $req->fetchAll();
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
		<div class="col-md-12 pagination center-block">
			  <a href="http://localhost:100/php/test/producten.php?pagina=<?php if($_GET['pagina'] <= 1){echo '1';} else {echo $_GET['pagina'] -1;}?>">&laquo; Vorige</a>
			  <a href="http://localhost:100/php/test/producten.php?pagina=<?= $_GET['pagina'] + 1?>">Volgende &raquo;</a>
			</div>
	</div>
</div>
<?php
include('footer.php');
?>
