<?php

 /*

    Scrie   - w (write)
    Citeste - r (read)
    Adauga  - a (append)

  */

  echo "Adaugare unui fisier 1";
  print "<br/>";
  print "<br/>";

  $f = fopen('materii1.txt','a');

  fwrite($f, "\n". 'Chimie');
 
  fclose($f);

?>
