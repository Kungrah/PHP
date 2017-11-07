<?php include('config.php');
session_start();
if(levelCheck(1)) {
    if (isset($_GET['Artikel_ID'])){
        try
        {
            $database = new PDO("mysql:host=localhost;dbname=examen", 'root', '');// Hier maak ik een database connectie
            $req = $database->prepare("DELETE FROM artikel WHERE Artikel_ID =:Artikel_ID");//hier bereid ik voor om de producten te verwijderen uit mijn database  
                $req->execute([
                    ":Artikel_ID" => $_GET['Artikel_ID']   
                ]);
            header('Location:'. "producten.php");exit;;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
} 

        
      