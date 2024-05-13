<?php

  echo "Scrierea unui fisier";
  print "<br/>";
  print "<br/>";
  
   //Scrierea unui fisier

  /*

    Scrie   - w (write)
    Citeste - r (read)
    Adauga  - a (append)

  */

  $f = fopen('mesaj.txt','w');

  fwrite($f, 'Am creat un fisier text "mesaj.txt".'."\n".'Hello world!');

  fclose($f);

  
?>

