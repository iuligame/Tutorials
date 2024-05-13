<?php

echo "Select";
print "<br/>";
print "<br/>";
//Select

require 'conectare.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

  <?php

  $sql = "SELECT * FROM client" ;
  $result = mysqli_query($conectare , $sql);

  ?>

  <table border="2">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Produs</th>
      </tr>
    </thead>
    <?php
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo '<td>'.$row['ID'].'</td>';
      echo '<td>'.$row['nume'].'</td>';
      echo '<td>'.$row['prenume'].'</td>';
      echo '<td>'.$row['username'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '<td>'.$row['password'].'</td>';
      echo '<td>'.$row['produs'].'</td>';
      echo "</tr>";
    }
  ?>
  </table>

  <br><br>

  
    <?php

    $sql = "SELECT * FROM client  WHERE id = 2" ;
    $result = mysqli_query($conectare , $sql);

    ?>

  <table border="2">
     <thead>
        <tr>
          <th>ID</th>
          <th>Nume</th>
          <th>Prenume</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Produs</th>
        </tr>
      </thead>

     <?php
      while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo '<td>'.$row['ID'].'</td>';
      echo '<td>'.$row['nume'].'</td>';
      echo '<td>'.$row['prenume'].'</td>';
      echo '<td>'.$row['username'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '<td>'.$row['password'].'</td>';
      echo '<td>'.$row['produs'].'</td>';
      echo "</tr>";
      }
      ?>
  </table>

  </body>
</html>

<?php
  mysqli_close($conectare);
?>
