<?php  

  echo "functia superglobala '_include'";
  print "<br/>";
  print "<br/>";


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>

  <header>

  <p>Hello world!</p> 
  <?php
    include "meniu exemplu.php";
  ?>
  <p>Goodbye!</p>

  </header>
  
</body>
</html>


<?php  

  echo "functia superglobala '_requist'";
  print "<br/>";
  print "<br/>";

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<body>

  <header>

  <p>Hello world!</p>
  <?php
    require "meniu exemplu.php";
  ?>
  <p>Goodbye!</p>
  </header>
  
</body>
</html>