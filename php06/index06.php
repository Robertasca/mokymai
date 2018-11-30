<?php $metai = 1774;
  $cities3["Vasingtonas"] = [0.6, 1790, "JAV"];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($metai >= $cities3["Vasingtonas"][1]){
        echo "Vasingtonas yra JAV sostine";
      } elseif ($metai == 1774) {
        echo "JAV sostine vis dar Filadelfijoje";
      } else
        {
        echo 'Liko' .($cities3["Vasingtonas"][1] - $metai). 'metai iki Vasingtono ikurimo';
        }
     ?>
  </body>
</html>
