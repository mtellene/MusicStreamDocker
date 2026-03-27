<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Spotify BTS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
     <?php if(isset($_SESSION["user"])): ?>
         <span>👤 <?php echo $_SESSION["user"]; ?></span>
     <?php endif; ?>

    <h1>🎧 MusicStream</h1>

    <nav>
        <a href="index.php">Accueil</a>

        <?php if(isset($_SESSION["user"])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Déconnexion</a>
        <?php else: ?>
            <a href="login.php">Connexion</a>
        <?php endif; ?>
    </nav>
</header>

<main>

    <section>
        <h2>Bienvenue sur votre plateforme musicale</h2>
        <p>Découvrez vos playlists préférées 🎶</p>
    </section>

    <section>
        <h3>Playlists populaires</h3>

        <div class="playlist">
            <div class="card">
                <img src="img/playlist1.jpg" alt="Playlist 1">
                <p>Top Hits</p>
            </div>

            <div class="card">
                <img src="img/playlist2.jpg" alt="Playlist 2">
                <p>Chill</p>
            </div>

            <div class="card">
                <img src="img/playlist3.jpg" alt="Playlist 3">
                <p>Workout</p>
            </div>
        </div>
    </section>

</main>

<footer>
    <p>© BTS SIO - Projet Docker</p>
</footer>

</body>
</html>

