<?php
class Bola extends Exception {
  public function pesanError() {
    //pesan error
    $error = 'Diameter tersebut adalah diamater Bola Voli';
    return $error ;
  }
}

$Diameter= 22;

try {
  //check if
  if($Diameter == 20) {
    throw new Bola($Diameter);
  }
  else{
    throw new Exception("Bukan Bola Voli");
  }
}

catch (Bola $e) {
  echo $e->pesanError();
}
catch(Exception $e) {
  echo $e->getMessage();
}

finally	{
  echo "<br>===================================================================================================";
	echo "<br>Cek Bola Voli atau Bukan";
  echo "<br>Diameter bola voli adalah 20cm" ;
}
?>