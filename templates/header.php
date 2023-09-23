<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once('config/url.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENEM Gratuito</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <nav>
            <H1>Enem Gratuito</H1>

            <div class="ul">
                <ul>
                    <li><a href="<?= $BASE_URL ?>">Inicio</a></li>
                    <li><a href="<?= $BASE_URL ?>">Dicas</a></li>
                    <li><a href="<?= $BASE_URL ?>sobre.php">Sobre</a></li>
                </ul>
            </div>
        </nav>
    </header>