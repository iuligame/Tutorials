<?php
	session_start();

	unset($_SESSION['Prenume']);

	if (isset($_SESSION['Prenume'])) {

    	echo "Sesiunea inca exista";
    	echo $_SESSION['Prenume'];
    	
 	} else {

    	echo "Sesiunea este distrusa";
    	

  	}

?>

