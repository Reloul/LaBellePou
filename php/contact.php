<?php
     session_start();
     include 'verifcontact.php';
?>
<!DOCTYPE html>
<html lang="fr">
        <title> La Bellepou | Site Officiel de Poubelles </title>
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
        <link rel="stylesheet" type="text/css" href="../css/Bellepou.css">
        <link rel="stylesheet" type="text/css" href="../css/panier.css">
    </head>
    <body>
          <?php include 'header.php'; ?>
          <?php include 'menu.php'; ?>
          <?php
          include 'menu.php'; 
          include 'panier.php';
          ?>
          <div class="form">
            <h2>Contactez-nous !</h2>
            <br>
            <form method="post" action="">
               <input type="text" id="prenom" placeholder="Votre prénom..." name="prenom" value="<?php echo $prenom; ?>" class="<?php echo $prenomclass; ?>">
               <div class="verif" id="prenomverif"><?php echo $prenomverif; ?></div>
               <label for="nom">Nom</label>
               <input type="text" id="nom" placeholder="Votre nom..." name="nom" value="<?php echo $nom; ?>" class="<?php echo $nomclass; ?>">
               <div class="verif" id="nomverif"><?php echo $nomverif; ?></div>
               <label for="dateNaissance">Date de naissance</label>
               <input type="date" name="dateN" id="dateN" value="<?php echo $dateN; ?>" class="<?php echo $dateNclass; ?>">
               <div class="verif" id="verifnaiss"><?php echo $verifnaiss; ?></div>

              
               <label for="genre">Genre</label>
               <ul class="genre">
                    <li>
                         <input type="radio" id="homme" name="genre" value="Homme" <?php echo $hommeChecked; ?>>
                         <label for="homme">Homme</label>
                    </li>
                    <li>
                         <input type="radio" id="femme" name="genre" value="Femme" <?php echo $femmeChecked; ?>>
                         <label for="femme">Femme</label>
                    </li>
                    <li>
                         <input type="radio" id="nh90" name="genre" value="NH90" <?php echo $nh90Checked; ?>>
                         <label for="nh90">Hélicoptère NH90 bi-turbine</label>
                    </li>
               </ul>
               <div class="verif" id="genreverif"><?php echo $genreverif; ?></div>

               <label for="email">Email</label>
               <input type="email" id="emailcontact" placeholder="Votre email..." name="emailcontact" value="<?php echo $emailcontact; ?>" class="<?php echo $emailclass; ?>">
               <div class="verif" id="emailexe"><?php echo $emailexe; ?></div>

               <label for="fonction">Fonction</label>
               <select name="fonction" id="fonction">
                    <option value="enseignant" <?php if($fonction == "enseignant") echo "selected"; ?>>Enseignant</option>
                    <option value="etudiant" <?php if($fonction == "etudiant") echo "selected"; ?>>Etudiant</option>
                    <option value="empereur" <?php if($fonction == "empereur") echo "selected"; ?>>Empereur de l'empire du Japon</option>
               </select>

               <label for="sujet">Sujet</label>
               <select name="sujet" id="sujet">
                    <option value="site" <?php if($sujet == "site") echo "selected"; ?>>Problème sur le site</option>
                    <option value="livraison" <?php if($sujet == "livraison") echo "selected"; ?>>Problème de livraison</option>
                    <option value="facturation" <?php if($sujet == "facturation") echo "selected"; ?>>Problème de facturation</option>
                    <option value="autre" <?php if($sujet == "autre") echo "selected"; ?>>Autre</option>
               </select>

               <label for="message">Message</label>
               <textarea name="message" id="message" cols="30" rows="10" style="<?php echo $messstyle; ?>"><?php echo $message; ?></textarea>
               <div class="verif" id="messageverif"><?php echo $messverif; ?></div>

               <input type="submit" value="Envoyer">
               <span class="verif" id="envoi"><?php echo $envoi; ?></span>
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