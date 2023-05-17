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
        <link rel="stylesheet" type="text/css" href="../css/panier.css">
    </head>
    <body>
          <?php include 'header.php'; ?>
          <?php include 'menu.php'; ?>
          <?php include 'panier.php'; 
               include 'varSession.inc.php';
               include '../bdd/laBellepouData.php';
          ?>
          
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
                                   <a id="boutonProduit" href="?categorie=corbeille">Corbeilles</a>
                              </div>
                         </div>
                    </div>
                    <div class="presPoub">
                         <div class="carte">
                              <div class="imagePres">
                                   <img id="presIntérieur" src="../doc/poubelle/intérieur/presInt.png" alt="présentation interieur" >
                              </div>
                              <div class="boutonProd">
                                   <a id="boutonProduit" href="?categorie=interieur">Intérieures</a>
                              </div>
                         </div>
                    </div>
                    <div class="presPoub">
                         <div class="carte">
                              <div class="imagePres">
                                   <img id="presExtérieur" src="../doc/poubelle/extérieur/presExte.png" alt="présentation extérieur">
                              </div>
                              <div class="boutonProd">
                                   <a id="boutonProduit" href="?categorie=exterieur">Extérieures</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <?php
               $tab = $_SESSION['produit'];
               if (isset($_GET['categorie'])) {
                    $categorie = $_GET['categorie'];
                    switch ($categorie) {
                         case 'corbeille':
                              echo "<div class='bandeauP'>";
                              echo "<hr id='corbeilleP'>";
                              echo "<div class='titre'>";
                              echo "<h2>CORBEILLES</h2>";
                              echo "</div>";
                              echo "<hr>";
                              echo "</div>";
                              echo "<div class='pageProduit'>";
                              echo "<div class='corps'> ";
                              echo "<div class='corbeilleTop'>";
                              $compte = 0;

                              foreach($tab['corbeille'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte < 5){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                              echo "</div>";
                              echo "<div class='corbeilleBot'>";
                              $compte = 0;

                              foreach($tab['corbeille'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte > 4){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }     
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              break;
                         case 'interieur':
                              echo "<div class='bandeauP'>";
                              echo "<hr id='intérieurP'>";
                              echo "<div class='titre'>";
                              echo "<h2>Intérieur</h2>";
                              echo "</div>";
                              echo "<hr>";
                              echo "</div>";
                              echo "<div class='pageProduit'>";
                              echo "<div class='corps'>";
                              echo "<div class='interieurTop'>";
                              $compte = 0;

                              foreach($tab['intérieur'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte < 5){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                         
                              echo "</div>";
                              echo "<div class='interieurBot'>";
                              $compte = 0;

                              foreach($tab['intérieur'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte > 4){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              break;

                         case "exterieur":
                              echo "<div class='bandeauP'>";
                              echo "<hr id='exterieurP'>";
                              echo "<div class='titre'>";
                              echo "<h2>extérieur</h2>";
                              echo "</div>";
                              echo "<hr>";
                              echo "</div>";
                              echo "<div class='pageProduit'>";
                              echo "<div class='corps'>";
                              echo "<div class='exterieurTop'>";
                              $compte = 0;

                              foreach($tab['extérieur'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte < 5){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                              echo "</div>";
                              echo "<div class='exterieurBot'>";
                              $compte = 0;

                              foreach($tab['extérieur'] as $produits){
                                   $compte = $compte + 1;
                                   if($compte > 4){
                                        echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                                        echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                                        echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                                        echo "<div class='contentBx'>";
                                        echo "<h2>".$produits['nom']."</h2>";
                                        echo "<div class='color'> <h3>Couleur</h3>";
                                        foreach($produits['couleur'] as $couleur){                                             
                                             echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                                        }
                                        echo "</div>";
                                        echo "<div class='commande'>";
                                        echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                                        echo "<div class='quantite'>";
                                        echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                                        echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                                        echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                                        echo "<div class='stock'>";
                                        echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                                   }   
                              }
                              echo "</div>";
                              echo "</div>";
                              echo "</div>";
                              break;
                    }
               }else{
                    echo "<div class='bandeauP'>";
                    echo "<hr id='corbeilleP'>";
                    echo "<div class='titre'>";
                    echo "<h2>CORBEILLES</h2>";
                    echo "</div>";
                    echo "<hr>";
                    echo "</div>";
                    echo "<div class='pageProduit'>";
                    echo "<div class='corps'> ";
                    echo "<div class='corbeilleTop'>";
                    $compte = 0;
     
                    foreach($tab['corbeille'] as $produits){
                         $compte = $compte + 1;
                         if($compte < 5){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
                    echo "</div>";
                    echo "<div class='corbeilleBot'>";
                    $compte = 0;
                    
                    foreach($tab['corbeille'] as $produits){
                         $compte = $compte + 1;
                         if($compte > 4){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='bandeauP'>";
                    echo "<hr id='intérieurP'>";
                    echo "<div class='titre'>";
                    echo "<h2>Intérieur</h2>";
                    echo "</div>";
                    echo "<hr>";
                    echo "</div>";
                    echo "<div class='pageProduit'>";
                    echo "<div class='corps'>";
                    echo "<div class='interieurTop'>";
                    $compte = 0;

                    foreach($tab['intérieur'] as $produits){
                         $compte = $compte + 1;
                         if($compte < 5){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
               
                    echo "</div>";
                    echo "<div class='interieurBot'>";
                    $compte = 0;

                    foreach($tab['intérieur'] as $produits){
                         $compte = $compte + 1;
                         if($compte > 4){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='bandeauP'>";
                    echo "<hr id='exterieurP'>";
                    echo "<div class='titre'>";
                    echo "<h2>extérieur</h2>";
                    echo "</div>";
                    echo "<hr>";
                    echo "</div>";
                    echo "<div class='pageProduit'>";
                    echo "<div class='corps'>";
                    echo "<div class='exterieurTop'>";
                    $compte = 0;

                    foreach($tab['extérieur'] as $produits){
                         $compte = $compte + 1;
                         if($compte < 5){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
                    echo "</div>";
                    echo "<div class='exterieurBot'>";
                    $compte = 0;

                    foreach($tab['extérieur'] as $produits){
                         $compte = $compte + 1;
                         if($compte > 4){
                              echo '<div class="container"> <div class="card"> <p>' . $produits['nom'].'</p>';
                              echo "<div class='imgBx' onmousemove=\"zoomImg(event, '".$produits['nom']."Image')\" style=\"background-image: url(".$produits['couleur'][0]['source']."); background-size: 0px;\" onmouseleave=\"disparition(event, '".$produits['nom']."Image')\" onmouseenter=\"apparition(event, '".$produits['nom']."Image')\" id=\"".$produits['nom']."Bckgrnd\">";
                              echo "<img src='".$produits['couleur'][0]['source']."' id='".$produits['nom']."Image' alt='".$produits['nom']."'> </div>";
                              echo "<div class='contentBx'>";
                              echo "<h2>".$produits['nom']."</h2>";
                              echo "<div class='color'> <h3>Couleur</h3>";
                              foreach($produits['couleur'] as $couleur){                                             
                                   echo "<span id='".$couleur['nom']."' onclick=\"changeImage('".$produits['nom']."Image', '".$couleur['source']."', '".$produits['nom']."Bckgrnd')\"></span>";
                              }
                              echo "</div>";
                              echo "<div class='commande'>";
                              echo "<button class=\"achat\" data-idImg='".$produits['nom']."Image' data-idQuant='".$produits['nom']."Quant' id='achat' value='".$produits['prix']."'>Acheter ".$produits['prix']."€</button>";
                              echo "<div class='quantite'>";
                              echo "<button class=\"moins\" id='".$produits['nom']."Moins' onclick=\"moins('".$produits['nom']."Quant', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">-</button>";
                              echo "<input type='text' value='0' readonly id='".$produits["nom"]."Quant'>";
                              echo "<button class=\"plus\" id='".$produits['nom']."Plus' onclick=\"plus('".$produits['nom']."Quant', '".$produits['nom']."Stock', '".$produits['nom']."Moins', '".$produits['nom']."Plus')\">+</button></div></div>";
                              echo "<div class='stock'>";
                              echo "<button type='button' id='".$produits['nom']."St' onclick=\"affStock('".$produits['nom']."Stock')\">Stock<div class='allStock' id='".$produits['nom']."Stock'>".$produits['quantite']."</div></button></div></div></div></div>";
                         }   
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
               }
          ?>
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
          <script>
               document.addEventListener('DOMContentLoaded', function() {
               var plus = document.getElementsByClassName('plus');
               var moins = document.getElementsByClassName('moins');
               var achat = document.getElementsByClassName('achat');

               for (var i = 0; i < plus.length; i++) {
                    plus[i].addEventListener('click', function() {
                         var input = this.parentNode.querySelector('input[type=text]');
                         var stock = this.parentNode.parentNode.parentNode.parentNode.querySelector('.stock .allStock');
                         var quantite = parseInt(input.value);
                         var stockValue = parseInt(stock.innerHTML);

                         if (quantite < stockValue) {
                              stockValue = stockValue - 1;
                              stock.innerHTML = stockValue;
                         } else {
                              alert("La quantité dépasse le stock disponible.");
                         }
                    });

                    moins[i].addEventListener('click', function() {
                         var input = this.parentNode.querySelector('input[type=text]');
                         var stock = this.parentNode.parentNode.parentNode.parentNode.querySelector('.stock .allStock');
                         var quantite = parseInt(input.value);
                         var stockValue = parseInt(stock.innerHTML);

                         if (quantite > 0) {
                              stockValue = stockValue + 1;
                              stock.innerHTML = stockValue;
                         }
                    });

                    achat[i].addEventListener('click', function() {
                         var input = this.parentNode.querySelector('input[type=text]');
                         var stock = this.parentNode.parentNode.parentNode.parentNode.querySelector('.stock .allStock');
                         var quantite = parseInt(input.value);
                         var stockValue = parseInt(stock.innerHTML);

                         if (stockValue > quantite) {
                         stockValue = stockValue - quantite;
                         stock.innerHTML = stockValue;

                         var idImg = this.getAttribute('data-idImg');
                         var idQuant = this.getAttribute('data-idQuant');
                         ajouterPanier(idImg, idQuant, this);
                         }
                    });
               }
               });

          </script>
     </body>
</htlm>