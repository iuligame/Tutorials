<?php

  echo "Variabile superglobale";
  print "<br/>";
  print "<br/>";

  echo '"globals"
        "_server"
        "_get"
        "_set"
        "_post"
        "_files"
        "_session"
        "_cookie"
        "_requist"
        "_env"';

  //Variabile superglobale

  //$globals
  //$_server
  //$_get
  //$_post
  //$_files
  //$_session
  //$_cookie
  //$_requist
  //$_env

  echo "variabila superglobala 'globals'";
  print "<br/>";
  print "<br/>";

  $a=10;

  function afiseaza()
  {
    $b=20;
    echo $GLOBALS["a"];
  }

  echo "<br/>";
  afiseaza();
  echo "<br/>";


  echo "variabila superglobala '_post'";
  print "<br/>";
  print "<br/>";
?>
      <form method="post" action="sign up.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" nume="trimite" value="Trimite">
      </form>

<?php  

  echo "variabila superglobala '_get'";
  print "<br/>";
  print "<br/>";

?>

      <form method="get" action="sign up2.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" nume="trimite" value="Trimite">
      </form>

<?php  

  echo "variabila superglobala '_cookie'";
  print "<br/>";
  print "<br/>";

?>

  <form action="pagina1.php">
    <input type= "submit" value="Creeaza un cookie.">
  </form>


<?php

  $_COOKIE['Exemplu']="Iulian";
  
  if (isset($_COOKIE['Exemplu'])) {
    echo '<p>'.$_COOKIE['Exemplu'].'</p>
          <form action="pagina2.php">
            <input type="submit" value="Distruge un cookie." />
          </form>';
  } else {

    echo  '<p>Creeaza un cookie</p>
           <form action="pagina1.php">
             <input type= "submit" value="Creeaza un cookie." />
           </form>';
  }
   

  echo "variabila superglobala '_session'";
  print "<br/>";
  print "<br/>";

  session_start();

  if (isset($_SESSION['Prenume'])) {
    
    echo '<form action="session2.php" >
           <input type= "submit" value="Inchide(distruge) sesiunea.">
          </form>';

  } else {
    
    echo '<form action="session1.php" >
            <input type= "submit" value="Deschide sesiunea.">
          </form>';        
  }

  print "<br/>";
  print "<br/>";


  echo "variabila superglobala '_files'";
  print "<br/>";
  print "<br/>";


  echo "Tutorialul este in folderul 'incarcare imaginiilor'";


  echo "variabila superglobala '_requist'";
  print "<br/>";
  print "<br/>";

  //echo $_REQUIST[''];


/*

  echo "METOD";

  print "<br/>";
  print "<br/>";
  
  echo $_REQUIST['METOD'];

  print "<br/>";
  print "<br/>";


  echo "TIME";

  print "<br/>";
  print "<br/>";
  
  echo $_REQUIST['TIME'];

  print "<br/>";
  print "<br/>";


  echo "TIME-FLOAT";

  print "<br/>";
  print "<br/>";

  echo $_REQUIST['TIME-FLOAT'];

  print "<br/>";
  print "<br/>";
  */
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

<?php  

  echo "variabila superglobala '_env'";
  print "<br/>";
  print "<br/>";


  /*echo "REMOTE_ADDR";

  print "<br/>";
  print "<br/>";
  
  echo $_ENV['REMOTE_ADDR'];

  print "<br/>";
  print "<br/>";*/


  echo "variabila superglobala '_server'";
  print "<br/>";
  print "<br/>";


  echo "Tipuri de variabile superglobale '_server'";
  print "<br/>";
  print "<br/>";

  //echo $_SERVER[''];

  //"PHP_SELF"
  //"SERVER_NAME"
  //"SERVER_PROTOCOL"
  //"REQUIST_METOD"
  //"REQUIST_TIME"
  //"REQUIST_TIME-FLOAT"
  //"DOCUMENT_ROOT"
  //"SCRIPT_FILENAME"
  //"REMOTE_ADDR"

  echo '"PHP_SELF"
        "SERVER_NAME"
        "SERVER_PROTOCOL"
        "REQUIST_METOD"
        "REQUIST_TIME"
        "REQUIST_TIME-FLOAT"
        "DOCUMENT_ROOT"
        "SCRIPT_FILENAME"
        "REMOTE_ADDR"';

  print "<br/>";
  print "<br/>";


  echo "PHP_SELF";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['PHP_SELF'];

  print "<br/>";
  print "<br/>";


  echo "SERVER_NAME";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['SERVER_NAME'];

  print "<br/>";
  print "<br/>";


  echo "SERVER_PROTOCOL";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['SERVER_PROTOCOL'];

  print "<br/>";
  print "<br/>";


  echo "REQUIST_METOD";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['REQUIST_METOD'];

  print "<br/>";
  print "<br/>";


  echo "REQUIST_TIME";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['REQUIST_TIME'];

  print "<br/>";
  print "<br/>";


  echo "REQUIST_TIME-FLOAT";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['REQUIST_TIME-FLOAT'];

  print "<br/>";
  print "<br/>";


  echo "DOCUMENT_ROOT";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['DOCUMENT_ROOT'];

  print "<br/>";
  print "<br/>";


  echo "SCRIPT_FILENAME";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['SCRIPT_FILENAME'];

  print "<br/>";
  print "<br/>";


  echo "REMOTE_ADDR";

  print "<br/>";
  print "<br/>";
  
  echo $_SERVER['REMOTE_ADDR'];

  print "<br/>";
  print "<br/>";
?>
