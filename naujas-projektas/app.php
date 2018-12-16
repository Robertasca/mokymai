<?php
$vardas = trim($_POST["vardas"]);
$message = trim($_POST["message"]);
$email = trim($_POST["email"]);


if(!empty($vardas) && !empty($message) && !empty($email)){
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $from = "$email";
    $to = "rcasnovicius@gmail.com";
    $subject = "Nauja zinute";
    $autorius = 'Nuo: ' . $vardas . ',' . $email;
    $zinute = htmlspecialchars($message);
    mail($to, $subject, $autorius, $zinute, $from);
    echo "<script>alert('Dekojame. Jusu zinute gauta');</script>";
    header('Location: contacts.php');

  }
}
include("db.php");
