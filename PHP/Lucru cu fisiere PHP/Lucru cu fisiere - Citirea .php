<?php
echo "Citirea unui fisier";
print "<br/>";
print "<br/>";

//citirea unui fisier;

/*
  Scrie   - w (write)
  Citeste - r (read)
  Adauga  - a (append)
*/

function show($text) {
  echo $text." <br/>";
}


$f = file("materii_cit3.txt");
$randuri = count($f);
$check = 1;

foreach ($f as $materia ) {
  echo trim ($materia);
  if($check < $randuri) {
    echo ', ';
    $check++;
  }
}

echo '<hr/>';


$f = file("materii_cit3_vector.txt");
$i = 0;

foreach ($f as $materia) {
  $carti[$i] = $materia;
  $i++;
}

show($carti[1]);

echo '<hr/>';


//$numef = 'materii_cit3_dimensiuni.txt'

$f = fopen("materii_cit3_dimensiuni.txt", 'r');
$info = fread($f,filesize("materii_cit3_dimensiuni.txt"));
$materii = explode(',', $info);
print_r($materii);
echo  "<br>";

foreach ($materii as $materia) {
  echo $materia. "<br>";
}

echo '<hr/>';

?>





