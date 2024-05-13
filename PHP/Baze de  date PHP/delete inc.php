<?php  

  require 'conectare.php';

  $id = $_POST['id'];

  $sql = "DELETE FROM client WHERE id = '$id'";

  $result = mysql_query($conectare, $sql);

  header('Location: index.php');

?>

