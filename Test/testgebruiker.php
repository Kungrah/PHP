<?php
$database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
						$req = $database->prepare("INSERT INTO gebruikers (id, voornaam, achternaam, adres, postcode, plaats, email, gebruiker, wachtwoord , rol ) values (:id, :voornaam, :achternaam, :adres, :postcode, :plaats, :email, :gebruiker, :wachtwoord, :rol)");//hier bereid ik voor om de producten toe tevoegen in mijn database	
							$req->execute([
									":id" => uniqid('',true),// hier vervangd hij de gegeven wat boven is vermeld met de waardes die ingevuld zijn: !!Voorbeeld $_POST['voornaam'] !!
									":voornaam" => 'testvoornaam',
									":achternaam" =>'testachternaam',
									":adres" => 'testadres',
									":postcode" => 'testpostcode',
									":plaats" => 'testplaats',
									":email" => 'testemail',
									":gebruiker" => uniqid('',true),
									":wachtwoord" => 'testwachtwoord',
									":rol" => 1
							]);