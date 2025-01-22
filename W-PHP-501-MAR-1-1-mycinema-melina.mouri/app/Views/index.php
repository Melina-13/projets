<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Scoop</title>
    <link rel="stylesheet" href="/public/CSS/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="/public/Images/logo-site.png" alt="Logo Cinema">
        </div>
        <div class="login">
            <img src="/public/Images/user.png" alt="logo user">
            <a href="login.php" class="button-login">Identifiez-vous</a>
        </div>
        <hr>
    </header>

    <main>
        <div class="buttons-container">
            <a href="sessions.php" class="button">
                <img src="/public/Images/movie.png" alt="Icône séances">
                <span>Séances</span>
            </a>
            <a href="gestion-clients.php" class="button">
                <img src="/public/Images/clients.png" alt="Icône gestion clients">
                <span>Gestion clients</span>
            </a>
            <a href="gestion-films.php" class="button">
                <img src="/public/Images/gestion-film.png" alt="Icône gestion films">
                <span>Gestions films</span>
            </a>
            <a href="acces-admin.php" class="button">
                <img src="/public/Images/admin.png" alt="Icône accès admin">
                <span>Acces administrateur</span>
            </a>
            <a href="gestion-salles.php" class="button">
                <img src="/public/Images/salles.png" alt="Icône gestion salles">
                <span>Gestions salles</span>
            </a>
            <a href="parametres.php" class="button">
                <img src="/public/Images/settings.png" alt="Icône paramètres">
                <span>Parametres</span>
            </a>
        </div>
    </main>
    <footer>
        <hr>
        <span>19/01/2024 21:00</span>
    </footer>
</body>
</html>
