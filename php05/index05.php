<?php
$cities3 = ["Tokijas", "Vasingtonas", "Maskva"];
$cities3 = [
  "Tokijas" => [13.6, 1868, "Japonija"],
  "Vasingtonas" => [0.6, 1790, "JAV"],
  "Maskva" => [11.5, 1147, "Rusija"],
];
$cities3["Londonas"] = [8.6, 43, "Anglija"];
print_r($cities3);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li><?php echo "Gyventoju skaiciu: {$cities3["Londonas"][0]} mln."; ?></li>
      <li><?php echo "Ikurtas: {$cities3["Londonas"][1]} m."; ?></li>
      <li><?php echo "Salis: {$cities3["Londonas"][2]} "; ?></li>
    </ul>
  </body>
</html>
