<?php
include "config.php";

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body style="text-align: center;">

<h1>Bienvenue <?php echo $_SESSION["user"]; ?> 🎧</h1>

<a href="index.php">Accueil</a><br>
<a href="logout.php">Déconnexion</a>

</body>
</html>
