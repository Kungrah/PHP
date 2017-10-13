<?php
include('header.php');
?>

<h2>Uitloggen</h2>
<?php
$_SESSION['inschrijver'] = NULL;// verwijderd alles wat in een session staat.
header('Location:'. "index.php");exit;
?>