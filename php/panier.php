<?php
     session_start();
     $email = $_SESSION['email'];
     include '../php/varSession.inc.php';
?>
<div class="toutPanier">
     <nav class="panier">
          <div class='pres'>
               <h3>Voici votre Panier : </h3>
          </div>
          <form class="produitV" method="post" action="../php/info.php">
               <?php
                    echo "<input type='submit' value='Sauvegarder Panier' id='sauve' onmouseenter='alerte(".$email.")'>";
               ?>
               <hr>
               <?php
                    $tab = $_SESSION['panier'];
                    foreach($tab[$email] as $personne){
                         echo "<div id='".$personne['nom'].$personne['quantite']."' class='article'>";
                         echo "<div class='global'>";
                         echo "<img src='".$personne['srcImg']."'>";
                         echo "<input type='text' name='img[]' value='".$personne['srcImg']."'>";
                         echo "<div class='spanG'>";
                         echo "<label>".$personne['nom']."</label>";
                         echo "<input type='text' name='nom[]' value='".$personne['nom']."'>";
                         echo "<label>".$personne['prix']."€ - Quantité : ".$personne['quantite']."</label>";
                         echo "<input type='text' name='prix[]' value='".$personne['prix']."'>";
                         echo "<input type='text' name='quant[]' value='".$personne['quantite']."'>";
                         echo "</div>";
                         echo "<button id='button".$personne['nom']."' onclick=\"supprimerPanier('".$personne['nom'].$personne['quantite']."', '".$personne['quantite']*$personne['prix']."')\">";
                         echo "<ion-icon name='close-outline'></ion-icon>";
                         echo "</button></div>";
                         echo "<hr id=".$personne['nom'].">";
                         echo "</div>";
                    }
               ?>
          </form>
          <div class="sousTotal">
               <?php
                    $somme = 0;
                    foreach($tab[$email] as $personne){
                         $somme = $personne['prix']*$personne['quantite'] + $somme;
                    }
               ?>
               <h3>Sous-Total : <span id="prix"><?php echo $somme ?>€</span></h3>
          </div>
     </nav>
     <div class="toggleee">
          <ion-icon name="cart-outline" class="open"></ion-icon>
     </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="../js/panier.js"></script>