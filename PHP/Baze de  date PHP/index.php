<?php

require 'conectare.php';

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
  <body>

      <?php

      echo "Select";
      print "<br/>";
      print "<br/>";
      //Select

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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>



    <?php
      require 'conectare.php';

      echo "Insert";
      print "<br/>";
      print "<br/>";
      //Insert
    ?>

    <h1>Sign Up!</h1>

    <form action="sign up.php" method="POST">
      <input type="text" name="id" placeholder="ID"><br/><br/>
      <input type="text" name="nume" placeholder="Nume"><br/><br/>
      <input type="text" name="prenume" placeholder="Prenume"><br/><br/>
      <input type="text" name="username" placeholder="Username"><br/><br/>
      <input type="text" name="email" placeholder="Email"><br/><br/>
      <input type="password" name="password" placeholder="Password"><br/><br/>
      <input type="text" name="produs" placeholder="Produs"><br/><br/>
      <input type="submit" name="trimite" value="New client!">
    </form>

    <h1>Update!</h1>

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

    <h1>Delete</h1>

    <form action="delete inc.php" method="POST"><br/><br/>
      <input type="text" name="id" placeholder="ID"><br/><br/>
      <input type="submit" name="trimite" value="Delete">
    </form>

  </body>
</html>

<?php
  mysqli_close($conectare);
?>
