<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "forma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error){
  echo "Atsiprasome, svetaine susidure su preoblema.\n";
  echo 'Klaida: ' . $mysqli->connect_error . '\n';
  exit();
}
mysqli_query($mysqli, "INSERT INTO klientai (vardas, message, email) VALUES('$_POST[vardas]', '$_POST[message]', '$_POST[email]')");
