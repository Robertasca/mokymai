<?php $x = 10; ?>
<?php $y = 7; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $z = $x + $y;
    echo "$x + $y = $z"."<br>";
    $z = $x - $y;
    echo "$x - $y = $z"."<br>";
    $z = $x * $y;
    echo "$x * $y = $z"."<br>";
    $z = $x / $y;
    echo "$x / $y = $z"."<br>";
    $z = $x % $y;
    echo "$x % $y = $z";
     ?>
  </body>
</html>
