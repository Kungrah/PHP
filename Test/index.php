
<!DOCTYPE html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	
		<title>Test PHP</title>
	</head>
		<body>
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
						<p>Test 1</p>
						</div>
						<div class="col-md-6">
						<p> Test 2</p>
						</div>
					</div>
				</div>
			</header>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1> PHP opdrachten</h1>
							<?php
								if(isset($_POST['firstname'])) 
									$firstname = $_POST['firstname'];
									else
										$firstname = null;

								if(isset($_POST['lastname']))
									$lastname = $_POST['lastname'];
									else
										$lastname = null;

								if(isset($_POST['email']))
									$email = $_POST['email'];
									else
										$email = null;

								if(isset($_POST['re-email']))
									$reEmail = $_POST['re-email'];
									else
										$reEmail = null;

								if(isset($_POST['password']))
									$password = $_POST['password'];
									else
										$password = null;

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
								if(isset($firstname) && isset($lastname) && isset($email) && isset($reEmail) && isset ($password)){
									echo "het werk";
								}
							?>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<br/>
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
										echo "Remco heeft genoeg geld <br/>";
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
							<br/>
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
							<br/>
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
					<br/>
			<footer>
			</footer>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
				</script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
			    </script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
			    </script>
		</body>
</html>