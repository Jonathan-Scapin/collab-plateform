<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};
$path = "http://localhost:8888/collab-plateform/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/jgthms/minireset.css@master/minireset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href=”//cdn.jsdelivr.net/npm/mana-font@latest/css/mana.css” rel=”stylesheet” type=”text/css” />
    <link rel="stylesheet" type="text/css" href="<?= $path . "assets/css/card-style.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?= $path . "assets/css/style.css"; ?>">
    <title>Digital tribu</title>
</head>

<body>
    <header>
        <nav>
            <a href="../../index.php">Home</a>
            <?php if (!is_connect()) : ?>
                <a href="./assets/php/login.php">Connexion</a>
            <?php else : ?>
                <a href="./assets/php/login.php">Dashboard</a>
                <a href="logout.php">Déconnexion</a>
            <?php endif ?>
        </nav>
    </header>