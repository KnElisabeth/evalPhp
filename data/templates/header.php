<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>         
                <?php
                if (isset($_SESSION) && !empty($_SESSION)){
                    echo"<li><a href='userbis.php'>Bonjour, $_SESSION[username]</a></li>";
                } else{
                    echo"<li><a href='login.php'>Connexion</a></li>";
                }
                ?>
            </ul>          
        </nav>
    </header>