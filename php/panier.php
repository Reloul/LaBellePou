<?php
     session_start();
?>
<div class="toutPanier">
     <nav class="panier">
          <div class='pres'>
               <h3>Voici votre Panier : </h3>
          </div>
          <form class="produitV" method="post" action="info.php">
               <input type="submit" value="Sauvegarder Panier">
               <hr>
          </form>
          <div class="sousTotal">
               <h3>Sous-Total : <span id="prix">0€</span></h3>
          </div>
     </nav>
     <div class="toggleee">
          <ion-icon name="cart-outline" class="open"></ion-icon>
     </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" src="../js/panier.js"></script>