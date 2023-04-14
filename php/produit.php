<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="fr">
     <head>
        <meta content ="charset=UTF-8">
        <meta name="author" lang="fr" content="Latry Ugo & Serres Valentin">
        <title> La Bellepou | Produits </title>
        <link rel="stylesheet" type="text/css" href="../css/produit.css">
        <link rel="stylesheet" type="text/css" href="../css/Bellepou.css">
        <link rel="stylesheet" type="text/css" href="/css/panier.css">
    </head>
    <body>
          <?php include 'header.php'; ?>
          <?php include 'menu.php'; ?>
          <?php include 'panier.php'; ?>
          <div class="bandeauPres">
               <h2 id="catTitre">CATÉGORIES</h2>
               <p id="catPhrase">Besoin d'une poubelle? Choisissez la catégorie qui vous intéresse :</p>
               <div class="presentation">
                    <div  class="presPoub">
                         <div class="carte">
                              <div class="imagePres">
                                   <img id="presCorbeille" src="../doc/poubelle/corbeille/presCorb.png" alt="presentation corbeille" >
                              </div>
                              <div class="boutonProd">
                                   <a id="boutonProduit" href="#corbeilleP">Corbeilles</a>
                              </div>
                         </div>
                    </div>
                    <div class="presPoub">
                         <div class="carte">
                              <div class="imagePres">
                                   <img id="presIntérieur" src="../doc/poubelle/intérieur/presInt.png" alt="présentation interieur" >
                              </div>
                              <div class="boutonProd">
                                   <a id="boutonProduit" href="#intérieurP">Intérieures</a>
                              </div>
                         </div>
                    </div>
                    <div class="presPoub">
                         <div class="carte">
                              <div class="imagePres">
                                   <img id="presExtérieur" src="../doc/poubelle/extérieur/presExte.png" alt="présentation extérieur">
                              </div>
                              <div class="boutonProd">
                                   <a id="boutonProduit" href="#exterieurP">Extérieures</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="bandeauP">
               <hr id="corbeilleP">
               <div class="titre">
                    <h2>CORBEILLES</h2>
               </div>
               <hr>
          </div>
          <div class="pageProduit">
               <div class="corps"> 
                    <div class="corbeilleTop">
                    <?php
                         $json = file_get_contents('../json/produit.json');
                         $tab = json_decode($json, true);
                         $compte = 0;

                         foreach($tab['corbeille'] as $produits){
                              $compte = $compte + 1;
                              if($compte < 5){
                                   echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                   echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                   echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                   echo "<div class='contentBx'>";
                                   echo "<h2>".$produits['nom']."</h2>";
                                   echo "<div class='color'> <h3>Couleur</h3>";
                                   foreach($produits['couleur'] as $couleur){
                                        foreach($couleur as $key => $images){
                                             foreach ($images as $image) {
                                                  echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                             }
                                        }
                                   }
                                   echo "</div>";
                                   echo "<div class='commande'>";
                                   echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                   echo "<div class='quantite'>";
                                   echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                   echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                   echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                   echo "<div class='stock'>";
                                   echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                              }   
                         }
                    ?>
                    </div>
                    <div class="corbeilleBot">
                    <?php
                         $compte = 0;

                         foreach($tab['corbeille'] as $produits){
                              $compte = $compte + 1;
                              if($compte > 4){
                                   echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                   echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                   echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                   echo "<div class='contentBx'>";
                                   echo "<h2>".$produits['nom']."</h2>";
                                   echo "<div class='color'> <h3>Couleur</h3>";
                                   foreach($produits['couleur'] as $couleur){
                                        foreach($couleur as $key => $images){
                                             foreach ($images as $image) {
                                                  echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                             }
                                        }
                                   }
                                   echo "</div>";
                                   echo "<div class='commande'>";
                                   echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                   echo "<div class='quantite'>";
                                   echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                   echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                   echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                   echo "<div class='stock'>";
                                   echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                              }   
                         }
                    ?>
                    </div>
               </div>
          </div>
          <div class="bandeauP">
               <hr id="intérieurP">
               <div class="titre">
                    <h2>Intérieur</h2>
               </div>
               <hr>
          </div>
          <div class="pageProduit">
               <div class="corps">
                    <div class="interieurTop">
                         <?php
                              $compte = 0;

                              foreach($tab['intérieur'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte < 5){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                        echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){
                                             foreach($couleur as $key => $images){
                                                  foreach ($images as $image) {
                                                       echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                                  }
                                             }
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                        echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                         ?>
                         
                    </div>
                    <div class="interieurBot">
                         <?php
                         $compte = 0;

                         foreach($tab['intérieur'] as $produits){
                              $compte = $compte + 1;
                              if($compte > 4){
                                   echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                   echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                   echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                   echo "<div class='contentBx'>";
                                   echo "<h2>".$produits['nom']."</h2>";
                                   echo "<div class='color'> <h3>Couleur</h3>";
                                   foreach($produits['couleur'] as $couleur){
                                        foreach($couleur as $key => $images){
                                             foreach ($images as $image) {
                                                  echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                             }
                                        }
                                   }
                                   echo "</div>";
                                   echo "<div class='commande'>";
                                   echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                   echo "<div class='quantite'>";
                                   echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                   echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                   echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                   echo "<div class='stock'>";
                                   echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                              }   
                         }
                         ?>
                    </div>
               </div>
          </div>
          <div class="bandeauP">
               <hr id="exterieurP">
               <div class="titre">
                    <h2>extérieur</h2>
               </div>
               <hr>
          </div>
          <div class="pageProduit">
               <div class="corps">
                    <div class="exterieurTop">
                         <?php
                         $compte = 0;

                         foreach($tab['extérieur'] as $produits){
                              $compte = $compte + 1;
                              if($compte < 5){
                                   echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                   echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                   echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                   echo "<div class='contentBx'>";
                                   echo "<h2>".$produits['nom']."</h2>";
                                   echo "<div class='color'> <h3>Couleur</h3>";
                                   foreach($produits['couleur'] as $couleur){
                                        foreach($couleur as $key => $images){
                                             foreach ($images as $image) {
                                                  echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                             }
                                        }
                                   }
                                   echo "</div>";
                                   echo "<div class='commande'>";
                                   echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                   echo "<div class='quantite'>";
                                   echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                   echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                   echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                   echo "<div class='stock'>";
                                   echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                              }   
                         }
                         ?>
                    </div>
                    <div class="exterieurBot">
                         <?php
                         $compte = 0;

                         foreach($tab['extérieur'] as $produits){
                              $compte = $compte + 1;
                              if($compte > 4){
                                   echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                   echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['idImg']."')\" style=\"background-image: url(".$produits['couleur'][0]['a'][0]['src']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['idImg']."')\" onmouseenter=\"apparition(event, '".$produits['idImg']."')\" id=\"".$produits['idBckG']."\">";
                                   echo "<img src='".$produits['couleur'][0]['a'][0]['src']."' id='".$produits['idImg']."' alt='".$produits['nom']."'> </div>";
                                   echo "<div class='contentBx'>";
                                   echo "<h2>".$produits['nom']."</h2>";
                                   echo "<div class='color'> <h3>Couleur</h3>";
                                   foreach($produits['couleur'] as $couleur){
                                        foreach($couleur as $key => $images){
                                             foreach ($images as $image) {
                                                  echo "<span id='".$image['idC']."' onclick=\"changeImage('".$produits['idImg']."', '".$image['src']."', '".$produits['idBckG']."')\"></span>";
                                             }
                                        }
                                   }
                                   echo "</div>";
                                   echo "<div class='commande'>";
                                   echo "<button onclick=\"ajouterPanier('".$produits['idImg']."','".$produits['idQuant']."',this)\" id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                   echo "<div class='quantite'>";
                                   echo "<button id='".$produits['idMoins']."' onclick=\"moins('".$produits['idQuant.']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">-</button>";
                                   echo "<input type='text' value='0' readonly id='".$produits["idQuant"]."'>";
                                   echo "<button id='".$produits['idPlus']."' onclick=\"plus('".$produits['idQuant']."', '".$produits['idStock']."', '".$produits['idMoins']."', '".$produits['idPlus']."')\">+</button></div></div>";
                                   echo "<div class='stock'>";
                                   echo "<button type='button' id='".$produits['idBStock']."' onclick=\"affStock('".$produits['idStock']."')\">Stock<div class='allStock' id='".$produits['idStock']."'>".$produits['quantite']."</div></button></div></div></div></div>";
                              }   
                         }
                         ?>
                    </div>
               </div>
          </div>
          <div class="toggle">
               <ion-icon name="menu" class="open"></ion-icon>
               <ion-icon name="close" class="close"></ion-icon>
          </div>
          
          <div id="scroll_to_top">
               <a href="#titre">
                   <img src="../doc/fleche.png" alt="">
               </a>
          </div>

          <?php include("footer.php"); ?>

          <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
          <script type="text/javascript" src="../js/index.js"></script>
          <script type="text/javascript" src="../js/produit.js"></script>
          <script type="text/javascript" src="../js/panier.js"></script>
     </body>
</htlm>