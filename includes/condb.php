<?php

$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "exile";
// Créer la connexion:
$connection = mysqli_connect($server, $username, $password, $db);

// Test de la connexion:
if (!$connection) {
  echo "Erreur :" .mysqli_connect_error();
  die("Impossible de se connecter à la base de données");
}

?>
