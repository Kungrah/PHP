
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
							 ?>
							<form action="" method="POST">
								<label class="label-control" for ="firstname"> First Name:</label>
								<input class="form-control" type ="text" id="firstname" name="firstname"/> 
								<label class="label-control"for ="lastname">Last Name:</label>
								<input class="form-control" type ="text" id="lastname" name="lastname"/>
								<label class="label-control"for ="email"> Your Email: </label>
								<input class="form-control" type ="text" id="email" name="email"/>
								<label class="label-control"for = "re-email">Re-enter Email: </label>
								<input class="form-control"type ="text" id="Re-enter Email"/>
								<label class="label-control"for ="password"> New Password: </label>
								<input class="form-control"type ="password" id="New Password" name="password"/>
								<input type="submit" name="verzenden" value="Sign Up"/>
							</form>
						</div>
					</div>
				</div>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						</div>
					</div>
				</div>
			</footer>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
				</script>
			    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
			    </script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
			    </script>
		</body>
</html>