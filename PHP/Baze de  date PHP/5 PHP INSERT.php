<?php
	echo "Insert";
	print "<br/>";
	print "<br/>";
	//Insert

	require 'conectare.php';
?>

<h1>Sign Up!</h1>

<form action="sign up.php" method="POST">
	<input type="text" name="nume" placeholder="Nume"><br/><br/>
	<input type="text" name="prenume" placeholder="Prenume"><br/><br/>
	<input type="text" name="username" placeholder="Username"><br/><br/>
	<input type="text" name="email" placeholder="Email"><br/><br/>
	<input type="password" name="password" placeholder="Password"><br/><br/>
	<input type="text" name="produs" placeholder="Produs"><br/><br/>
	<input type="submit" name="trimite" value="Client nou">
</form>


	</body>
	</html>
<?php
	mysqli_close($conectare);
?>
