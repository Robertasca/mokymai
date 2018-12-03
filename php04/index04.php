<?php
$cities = ["Berlynas","Roma","Londonas"];
$cities[] = "Tokijas";
print_r($cities);
$cities2 = [
  "Tokijas" => 13.6,
  "Vasingtonas" => 0.6,
  "Maskva" => 11.5,
];
$cities2["Londonas"] = 8.6;
print_r($cities2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php echo $cities[1]; ?></li>
    </ul>
    <ul>
      <?php echo "Gyventoju skaicius: {$cities2['Tokijas']} mln."; ?>
    </ul>
  </body>
</html>
