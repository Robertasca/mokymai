<?php
class Name {
  public $name;
  public $surname;

  public function labas(){
    return "Labas, mano vardas " . $this -> name . " pavarde " . $this -> surname . "<br>";
  }
}

$vardas1 = new Name();
$vardas2 = new Name();

$vardas1 -> name = "Jonas";
$vardas1 -> surname = "Jonaitis";

$vardas2 -> name = "Petras";
$vardas2 -> surname = "Petraitis";

echo $vardas1 -> labas();
echo $vardas2 -> labas();
 ?>
