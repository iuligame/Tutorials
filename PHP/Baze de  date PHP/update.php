<?php
  require 'conectare.php';

  $id = $_POST['ID'];
  $nume = $_POST['nume'];
  $prenume = $_POST['prenume'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $produs = $_POST['produs'];

  $sql = "UPDATE client SET nume = '$nume' WHERE id = '$id' ";
  $result = mysqli_query($conectare, $sql);

  $sql = "UPDATE client SET prenume = '$prenume' WHERE id = '$id' ";
  $result = mysqli_query($conectare, $sql);

  $sql = "UPDATE client SET username = '$username' WHERE id = '$id'";
  $result = mysqli_query($conectare, $sql);

  $sql = "UPDATE client SET email = '$email' WHERE id = '$id' ";
  $result = mysqli_query($conectare, $sql);

  $sql = "UPDATE client SET password = '$password' WHERE id = '$id' ";
  $result = mysqli_query($conectare, $sql);

  $sql = "UPDATE client SET produs = '$produs' WHERE id = '$id' ";
  $result = mysqli_query($conectare, $sql);

  header ('Location: index.php');
?>
