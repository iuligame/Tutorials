<?php

	require 'conectare.php';

	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$produs = $_POST['produs'];

	$sql = "INSERT INTO client (nume, prenume, username, email, password, produs) VALUES ('$nume','$prenume','$username','$email','$password','$produs')";
	$result = mysqli_query($conectare , $sql);

	if ($result) {
		echo "A mers!";
	} else {
		echo "Nu a mers :(";
	}

	mysqli_close($conectare);

	header("Location: index.php");
?>
