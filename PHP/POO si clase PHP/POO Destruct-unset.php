<?php 

	echo "Distruct, Unset";
//Distruct, Unset

print "<br/>";
print "<br/>";

class Oras{

  private $nume="Ploiesti";

  public function __construct ($nume){

    echo $this->nume;
    echo "Tocmai a creat un indcator";
    
  }

  public function __destruct ($nume){

    echo $this->nume;
    echo "Tocmai a distrus un indicator";

  }

}

$indicator=new Oras();
echo $indicator->$nume."<br/>";

?>