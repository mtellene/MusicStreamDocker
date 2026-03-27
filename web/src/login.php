<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Identifiants incorrects";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Connexion</h2>

<?php if(isset($error)) echo "<p>$error</p>"; ?>

<form method="POST">
    <input name="username" placeholder="Utilisateur"><br>
    <input name="password" type="password" placeholder="Mot de passe"><br>
    <button type="submit">Connexion</button>
</form>

</body>
</html>
