<?php
$temp = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);

rsort($temp);

$visosTmp = 0;
foreach($temp as $tmp){
  $visosTmp += $tmp;
  echo $tmp, ", ";
}
echo "<br/>";

$vid = $visosTmp / sizeof($temp);
echo "Vidutine menesio temperatura: ", round($vid), "<br/>";

$silciausia = array_slice($temp, 0, 5);
echo "Silciausios menesio temperaturos: ";
foreach($silciausia as $tmp){
  echo $tmp, ", ";
}
echo "<br/>";

$salciausia = array_slice($temp, sizeof($temp) - 5);
echo "Salciausios menesio temperaturos: ";
foreach($salciausia as $tmp){
  echo $tmp, ", ";
}
echo "<br/>";
 ?>
