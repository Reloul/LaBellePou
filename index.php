<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="fr">
     <head>
        <meta content ="charset=UTF-8">
        <meta name="author" lang="fr" content="Latry Ugo & Serres Valentin">
        <title> La Bellepou | Site Officiel de Poubelles </title>
        <link rel="stylesheet" type="text/css" href="css/Bellepou.css">
    </head>
    <body>
          <header class="haut">
               <div class="name">
                    <h1 id="titre">La Bellepou</h1>
               </div>
               <div class="compte">
                    <a href="php/inscription.php" class="inscription">Inscription</a>
                    <a href="php/connexion.php" class="connexion">Connexion</a>
               </div>
          </header>
          <div>
        <nav class="menu">
            <ul>
                    <li class="list active">
                        <b></b>
                        <b></b>
                        <a href="./index.php">
                            <span class="icon"><ion-icon name="home"></ion-icon></span>
                            <span class="title">Accueil</span>
                        </a>
                    </li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="./php/produit.php">
                            <span class="icon"><ion-icon name="cart"></ion-icon></span>
                            <span class="title">Produits</span>
                        </a>
                    </li>
                    <li class="list">
                        <b></b>
                        <b></b>
                        <a href="./php/contact.php">
                            <span class="icon"><ion-icon name="call"></ion-icon></span>
                            <span class="title">Contact</span>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>
          <div class="accueil">
               <div class="corps"> 
                    <div class="vid">
                         <video id="background-vid" autoplay loop muted height="700">
                              <source src="doc/vidéo/trashcan.mp4" type="video/mp4">
                         </video>
                         <div class="credit">
                              <p id="logo"><ion-icon name="logo-instagram" id="vidIcon"></ion-icon></p>
                              <p id="pseudo">d2_shots</p>
                         </div>
                    </div>
                    <h2 id="catTitre">POUBELLES D'INTÉRIEUR ET D'EXTÉRIEUR</h2>
               </div>
               <div class="bouton">
                    <a id="boutonA" href="html/produit.html">Découvrez Nos Produits</a>
               </div>
          </div>
          
          <?php include 'php/footer.php'; ?>

          <div class="toggle">
               <ion-icon name="menu" class="open"></ion-icon>
               <ion-icon name="close" class="close"></ion-icon>
          </div>

          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <script type="text/javascript" src="js/index.js"></script>
</htlm>