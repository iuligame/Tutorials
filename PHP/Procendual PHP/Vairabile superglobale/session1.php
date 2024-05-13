<?php
	session_start();

	$_SESSION['Prenume']="Iulian";

	if (isset($_SESSION['Prenume'])) {

    	echo "Sesiunea este setata";
    	echo $_SESSION['Prenume'];   

  	} else {
           
    	echo "Sesiunea nu este setata";

  	}

?>
