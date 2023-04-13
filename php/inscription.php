<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="fr">
     <head>
        <meta content ="charset=UTF-8">
        <meta name="author" lang="fr" content="Latry Ugo & Serres Valentin">
        <title> La Bellepou | Site Officiel de Poubelles </title>
        <link rel="stylesheet" type="text/css" href="../css/portail.css">
        <link rel="stylesheet" type="text/css" href="../css/Bellepou.css">
    </head>
    <body>
          <?php include 'header.php'; ?>
          <?php include 'menu.php'; ?>
          
          <div class="seconnecter">
            <h2>Créer un compte</h2>
            <br>
            <form>
               <label for="prenom">Prénom</label>
               <input type="text" id="prenom" placeholder="Votre prénom...">
               <div class="verif" id="prenomverif"></div>
               <label for="nom">Nom</label>
               <input type="text" id="nom" placeholder="Votre nom...">
               <div class="verif" id="nomverif"></div>
               <label for="dateNaissance">Date de naissance</label>
               <input type="date" name="dateNaissance" id="dateN">
               <div class="verif" id="verifnaiss"></div>
               <label for="genre">Genre</label>
               <ul class="genre">
                    <li>
                         <input type="radio" id="homme" name="genre" value="Homme">
                         <label for="homme">Homme</label>
                    </li>
                    <li>
                         <input type="radio" id="femme" name="genre" value="Femme">
                         <label for="femme">Femme</label>
                    </li>
                    <li>
                         <input type="radio" id="nh90" name="genre" value="NH90">
                         <label for="nh90">Hélicoptère NH90 bi-turbine</label>
                    </li>
               </ul>
               <label for="email">Email</label>
               <input type="email" id="email" placeholder="Votre email...">
               <div class="verif" id="emailexe"></div>
               <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" placeholder="Votre mot de passe...">
                <div class="verif" id="mdpexe"></div>
               <input type="submit" value="Se connecter" id="submit">
            </form>
          </div>
          
          <?php include 'footer.php'; ?>

          <div class="toggle">
               <ion-icon name="menu" class="open"></ion-icon>
               <ion-icon name="close" class="close"></ion-icon>
          </div>

          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <script src="../js/contact.js"></script>
          <script src="../js/index.js"></script>
    </body>
</htlm>
