<?php
     session_start();
     include 'verif.php';
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
            <h2>Connexion</h2>
            <br>
            <form method="post" action="verif.php">
               <label for="email">Email</label>
               <input type="email" id="email" placeholder="Votre email..." name="email" value="<?php echo $email; ?>">
               <label for="mdp">Mot de passe</label>
               <input type="password" id="mdp" placeholder="Votre mot de passe..." name="password" value="<?php echo $password; ?>">
               <input type="submit" value="Se connecter" id="submit" name="submit">
               <span class="verif" id="error"><?php echo $error; ?></span>
            </form>
          </div>
          
          <?php include 'footer.php'; ?>

          <div class="toggle">
               <ion-icon name="menu" class="open"></ion-icon>
               <ion-icon name="close" class="close"></ion-icon>
          </div>

          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <script src="../js/index.js"></script>
    </body>
</htlm>
