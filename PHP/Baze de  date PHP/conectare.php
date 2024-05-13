<?php
	/*

	ID
	Username
	Password
	Email
	Nume
	Prenumele


	*/

	$conectare = mysqli_connect('localhost' , 'root' , 'root' , 'magazin online test');

	if (!$conectare) {
		echo "Conectarea unei baze de date nu a reusit";
		die(mysqli_connect_error());
	}
?>
