<?php
	require 'conectare.php';

	echo "Upedate";
  print "<br/>";
  print "<br/>";
	//Upedate
?>

<h1>Sign Up!</h1>

	<form action="update.php" method="POST"><br/><br/>
    <input type="text" name="id" placeholder="ID"><br/><br/>
    <input type="text" name="nume" placeholder="Nume"><br/><br/>
    <input type="text" name="prenume" placeholder="Prenume"><br/><br/>
    <input type="text" name="username" placeholder="Username"><br/><br/>
    <input type="text" name="email" placeholder="Email"><br/><br/>
    <input type="password" name="password" placeholder="Reset Password"><br/><br/>
    <input type="text" name="produs" placeholder="Produs"><br/><br/>
    <input type="submit" name="trimite" value="Update!">
  </form>


	</body>
	</html>
<?php
	mysqli_close($conectare);
?>
