<!DOCTYPE html>
<html lang="fr">
     <head>
        <meta content ="charset=UTF-8">
        <meta name="author" lang="fr" content="Latry Ugo & Serres Valentin">
        <title> La Bellepou | Site Officiel de Poubelles </title>
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
        <link rel="stylesheet" type="text/css" href="../css/Bellepou.css">
    </head>
    <body>
          <?php include 'header.php'; ?>
          <?php include 'menu.php'; ?>
          <div class="form">
            <h2>Contactez-nous !</h2>
            <br>
            <form>
               <label for="dateContact">Date de contact</label>
               <input type="date" name="dateContact" id="dateC">
               <div class="verif" id="dateverif"></div>
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
               <label for="fonction">Fonction</label>
               <select name="fonction" id="fonction">
                    <option value="enseignant">Enseignant</option>
                    <option value="etudiant">Etudiant</option>
                    <option value="empereur">Empereur de l'empire du Japon</option>
               </select>
               <label for="sujet">Sujet</label>
               <select name="sujet" id="sujet">
                    <option value="site">Problème sur le site</option>
                    <option value="livraison">Problème de livraison</option>
                    <option value="achat">Soucis d'achat</option>
                    <option value="autre">Autre</option>
               </select>
               <label for="message">Message</label>
               <textarea name="message" placeholder="Votre message..." id="mess"></textarea>
               <div class="verif" id="messverif"></div>
               <input type="submit" value="Envoyer" id="submit">
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
