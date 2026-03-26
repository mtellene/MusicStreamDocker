<?php
$host = "db";
$user = "root";
$password = "root";
$database = "bts";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Erreur connexion BDD");
}
?>
