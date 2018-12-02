<?php $cities4 = ["Tokijas", "Vasingtonas", "Maskva", "Londonas"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php print_r($cities4); ?>
    <ul>
      <?php
      for ($i=0; $i < count($cities4); $i++) {
        echo "<li>$cities4[$i]</li>";
      }
       ?>
     </ul>
     <ul>
       <?php foreach ($cities4 as $cities1) {
         echo "$cities1"."<br>";
       }
       ?>
     </ul>
  </body>
</html>
