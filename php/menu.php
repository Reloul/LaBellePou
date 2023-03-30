<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/Bellepou.css">
    <script src='index.js'></script>
</head>
<body>
    <div>
        <nav class="menu">
            <ul>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="../index.php">
                            <span class="icon"><ion-icon name="home"></ion-icon></span>
                            <span class="title">Accueil</span>
                        </a>
                    </li>
                    <li class="list<?php if ($_SERVER['SCRIPT_NAME'] == "/php/produit.php") echo ' active'; ?>">
                        <b></b>
                        <b></b>
                        <a href="./produit.php">
                            <span class="icon"><ion-icon name="cart"></ion-icon></span>
                            <span class="title">Produits</span>
                        </a>
                    </li>
                    <li class="list<?php if ($_SERVER['SCRIPT_NAME'] == "/php/contact.php") echo ' active'; ?>">
                        <b></b>
                        <b></b>
                        <a href="./contact.php">
                            <span class="icon"><ion-icon name="call"></ion-icon></span>
                            <span class="title">Contact</span>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
</body>
</html>