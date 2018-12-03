<?php
if(isset($_POST["submit"])){
  echo ("Vardas: " . $_POST["vardas"] . "<br/>\n");
  echo ("Pavarde: " . $_POST["pavarde"]);
  exit();
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php $_PHP_SELF; ?>" method="post">
      Vardas: <input type='text' name="vardas"/>
      Pavarde: <input type='text' name="pavarde"/>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
