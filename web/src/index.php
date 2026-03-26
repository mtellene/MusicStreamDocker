<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: dashboard.php");
    } else {
        echo "Erreur login";
    }
}
?>

<form method="POST">
    <input name="username" placeholder="User">
    <input name="password" type="password" placeholder="Password">
    <button type="submit">Connexion</button>
</form>
