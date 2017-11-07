<?php
function levelCheck($level) {
	if(isset($_SESSION['inschrijver'])) {
		$rol = $_SESSION['inschrijver']['rol'];
		if($rol >= $level) {
			return true;
		} else {
			return false;
		}
	}
}
?>