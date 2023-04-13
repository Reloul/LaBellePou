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
          <div class="pageProduit">
               <div class="corps"> 
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
                         <div class="container">
                              <div class="card">
                                   <p>Dunkelgruen</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'dunkel')" style="background-image: url(../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-bleu.png); background-size: 0px;" onmouseleave="disparition(event, 'dunkel')" onmouseenter="apparition(event, 'dunkel')" id="imgBxDunkel">
                                        <img src="../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-bleu.png" id="dunkel" alt="Dunkelgruen">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Dunkelgruen</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="bleu" onclick="changeImage('dunkel', '../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-bleu.png', 'imgBxDunkel')"></span>
                                             <span id="rouge" onclick="changeImage('dunkel', '../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-rouge.png', 'imgBxDunkel')"></span>
                                             <span id="blanc" onclick="changeImage('dunkel', '../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-blanc.png', 'imgBxDunkel')"></span>
                                             <span id="beige" onclick="changeImage('dunkel', '../doc/poubelle/corbeille/dunkelgruen/dunkelgruen-35-beige.png', 'imgBxDunkel')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('dunkel','quantDunkel',this)" id="achat" value='35'>Acheter 35€</button>
                                             <div class="quantite">
                                                  <button id="moinsDunk" onclick="moins('quantDunkel', 'moinsDunk', 'plusDunk')">-</button>
                                                  <input type="text" value="0" readonly id="quantDunkel">
                                                  <button id="plusDunk" onclick="plus('quantDunkel', 'DunkStock', 'moinsDunk', 'plusDunk')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sDunk" onclick="affStock('DunkStock')">Stock 
                                                  <div class="allStock" id="DunkStock">192</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Woodrow</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'wood')" style="background-image: url(../doc/poubelle/corbeille/wooddrow/wooddrow-44\,50-blanche.png); background-size: 0px;" onmouseleave="disparition(event, 'wood')" onmouseenter="apparition(event, 'wood')" id="imgBxWood">
                                        <img src="../doc/poubelle/corbeille/wooddrow/wooddrow-44,50-blanche.png" id="wood" alt="Woodrow">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Woodrow</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="blanc" onclick="changeImage('wood', '../doc/poubelle/corbeille/wooddrow/wooddrow-44,50-blanche.png', 'imgBxWood')"></span>
                                             <span id="beige" onclick="changeImage('wood', '../doc/poubelle/corbeille/wooddrow/wooddrow-44,50-beige.png', 'imgBxWood')"></span>
                                             <span id="vert" onclick="changeImage('wood', '../doc/poubelle/corbeille/wooddrow/wooddrow-44,50-verte.png', 'imgBxWood')"></span>
                                             <span id="noir" onclick="changeImage('wood', '../doc/poubelle/corbeille/wooddrow/wooddrow-44,50-gris.png', 'imgBxWood')"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('wood','quantWood',this)" id="achat" value='44.50'>Acheter 44.50€</button>
                                             <div class="quantite">
                                                  <button id="moinsWood" onclick="moins('quantWood', 'moinsWood', 'plusWood')">-</button>
                                                  <input type="text" value="0" readonly id="quantWood">
                                                  <button id="plusWood" onclick="plus('quantWood', 'WoodStock', 'moinsWood', 'plusWood')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sWood" onclick="affStock('WoodStock')">Stock 
                                                  <div class="allStock" id="WoodStock">347</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Mateo</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'mateo')" style="background-image: url(../doc/poubelle/corbeille/mateo/mateo-19\,25.png); background-size: 0px;" onmouseleave="disparition(event, 'mateo')" onmouseenter="apparition(event, 'mateo')">
                                        <img src="../doc/poubelle/corbeille/mateo/mateo-19,25.png" id="mateo" alt="Mateo">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Mateo</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="bleuC"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('mateo','quantMat',this)" id="achat" value='19.25'>Acheter 19.25€</button>
                                             <div class="quantite">
                                                  <button id="moinsMat" onclick="moins('quantMat', 'moinsMat', 'plusMat')">-</button>
                                                  <input type="text" value="0" readonly id="quantMat">
                                                  <button id="plusMat" onclick="plus('quantMat', 'MateoStock', 'moinsMat', 'plusMat')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sMateo" onclick="affStock('MateoStock')">Stock 
                                                  <div class="allStock" id="MateoStock">415</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Velpabin</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'velpabin')" style="background-image: url(../doc/poubelle/corbeille/velpabin/velpabin-54_90.png); background-size: 0px;" onmouseleave="disparition(event, 'velpabin')" onmouseenter="apparition(event, 'velpabin')">
                                        <img src="../doc/poubelle/corbeille/velpabin/velpabin-54_90.png" id="velpabin" alt="Velpabin">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Velpabin</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="noir"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('velpabin','quantVelp',this)" id="achat" value='54.90'>Acheter 54.90€</button>
                                             <div class="quantite">
                                                  <button id="moinsVelp" onclick="moins('quantVelp', 'moinsVelp', 'plusVelp')">-</button>
                                                  <input type="text" value="0" readonly id="quantVelp">
                                                  <button id="plusVelp" onclick="plus('quantVelp', 'VelpStock', 'moinsVelp', 'plusVelp')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sVelp" onclick="affStock('VelpStock')">Stock 
                                                  <div class="allStock" id="VelpStock">175</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="corbeilleBot">
                         <div class="container">
                              <div class="card">
                                   <p>Metal</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'metal')" style="background-image: url(../doc/poubelle/corbeille/metalA/metalA-55.png); background-size: 0px;" onmouseleave="disparition(event, 'metal')" onmouseenter="apparition(event, 'metal')">
                                        <img src="../doc/poubelle/corbeille/metalA/metalA-55.png" id="metal" alt="Metal">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Metal</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="gris"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('metal','quantMet',this)" id="achat" value='55'>Acheter 55€</button>
                                             <div class="quantite">
                                                  <button id="moinsMet" onclick="moins('quantMet', 'moinsMet', 'plusMet')">-</button>
                                                  <input type="text" value="0" readonly id="quantMet">
                                                  <button id="plusMet" onclick="plus('quantMet', 'MetalStock', 'moinsMet', 'plusMet')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sMetal" onclick="affStock('MetalStock')">Stock 
                                                  <div class="allStock" id="MetalStock">58</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Exacompta</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'exa')" style="background-image: url(../doc/poubelle/corbeille/exacompta/exacompta-7\,90-bleu.png); background-size: 0px;" onmouseleave="disparition(event, 'exa')" onmouseenter="apparition(event, 'exa')" id="ImgBxExa">
                                        <img src="../doc/poubelle/corbeille/exacompta/exacompta-7,90-bleu.png" id="exa" alt="Exacompta">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Exacompta</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="bleuC" onclick="changeImage('exa', '../doc/poubelle/corbeille/exacompta/exacompta-7,90-bleu.png', 'ImgBxExa')"></span>
                                             <span id="noir" onclick="changeImage('exa', '../doc/poubelle/corbeille/exacompta/exacompta-7,90-noir.png', 'ImgBxExa')"></span>
                                             <span id="rouge" onclick="changeImage('exa', '../doc/poubelle/corbeille/exacompta/exacompta-7,90-rouge.png', 'ImgBxExa')"></span>
                                             <span id="vert" onclick="changeImage('exa', '../doc/poubelle/corbeille/exacompta/exacompta-7,90-vert.png', 'ImgBxExa')"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('exa','quantExa',this)" id="achat" value='7.90'>Acheter 7.90€</button>
                                             <div class="quantite">
                                                  <button id="moinsExa" onclick="moins('quantExa', 'moinsExa', 'plusExa')">-</button>
                                                  <input type="text" value="0" readonly id="quantExa">
                                                  <button id="plusExa" onclick="plus('quantExa', 'ExaStock', 'moinsExa', 'plusExa')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sExa" onclick="affStock('ExaStock')">Stock 
                                                  <div class="allStock" id="ExaStock">854</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
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
                         <div class="container">
                              <div class="card">
                                   <p>Andromeda</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'andro')" style="background-image: url(../doc/poubelle/intérieur/andromeda/andromeda-750-blanc-bleu.png); background-size: 0px;" onmouseleave="disparition(event, 'andro')" onmouseenter="apparition(event, 'andro')" id="ImgBxAndro">
                                        <img src="../doc/poubelle/intérieur/andromeda/andromeda-750-vert-bleu.png" id="andro" alt="Andromeda">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Andromeda</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="vert" onclick="changeImage('andro', '../doc/poubelle/intérieur/andromeda/andromeda-750-vert-bleu.png', 'ImgBxAndro')"></span>
                                             <span id="blanc" onclick="changeImage('andro', '../doc/poubelle/intérieur/andromeda/andromeda-750-blanc-bleu.png', 'ImgBxAndro')"></span>
                                             <span id="jaune" onclick="changeImage('andro', '../doc/poubelle/intérieur/andromeda/andromeda-750-jaune-blanc.png', 'ImgBxAndro')"></span>
                                             <span id="bleu" onclick="changeImage('andro', '../doc/poubelle/intérieur/andromeda/andromeda-750-jaune-bleu.png', 'ImgBxAndro')"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('andro','quantAnd',this)" id="achat" value='750'>Acheter 750€</button>
                                             <div class="quantite">
                                                  <button id="moinsAnd" onclick="moins('quantAnd', 'moinsAnd', 'plusAnd')">-</button>
                                                  <input type="text" value="0" readonly id="quantAnd">
                                                  <button id="plusAnd" onclick="plus('quantAnd', 'AndroStock', 'moinsand', 'plusAnd')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sAndro" onclick="affStock('AndroStock')">Stock 
                                                  <div class="allStock" id="AndroStock">124</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Ark</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'ark')" style="background-image: url(../doc/poubelle/intérieur/ark/ark-1-blanc.png); background-size: 0px;" onmouseleave="disparition(event, 'ark')" onmouseenter="apparition(event, 'ark')" id="ImgBxArk">
                                        <img src="../doc/poubelle/intérieur/ark/ark-1-blanc.png" id="ark" alt="Ark">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Ark</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="blanc" onclick="changeImage('ark', '../doc/poubelle/intérieur/ark/ark-1-blanc.png', 'ImgBxArk')"></span>
                                             <span id="noir" onclick="changeImage('ark', '../doc/poubelle/intérieur/ark/ark-1-gris.png', 'ImgBxArk')"></span>
                                             <span id="rose" onclick="changeImage('ark', '../doc/poubelle/intérieur/ark/ark-1-rose.png', 'ImgBxArk')"></span>
                                             <span id="vert" onclick="changeImage('ark', '../doc/poubelle/intérieur/ark/ark-1-vert.png', 'ImgBxArk')"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('ark','quantArk',this)" id="achat" value='2'>Acheter 2€</button>
                                             <div class="quantite">
                                                  <button id="moinsArk" onclick="moins('quantArk', 'moinsArk', 'plusArk')">-</button>
                                                  <input type="text" value="0" readonly id="quantArk">
                                                  <button id="plusArk" onclick="plus('quantArk', 'ArkStock', 'moinsArk', 'plusArk')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sArk" onclick="affStock('ArkStock')">Stock 
                                                  <div class="allStock" id="ArkStock">541</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Atmosphera</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'atmo')" style="background-image: url(../doc/poubelle/intérieur/atmosphera/atmosphera-60-noir.png); background-size: 0px;" onmouseleave="disparition(event, 'atmo')" onmouseenter="apparition(event, 'atmo')" id="ImgBxAtmo">
                                        <img src="../doc/poubelle/intérieur/atmosphera/atmosphera-60-noir.png" id="atmo" alt="Atmosphera">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Atmosphera</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="noir" onclick="changeImage('atmo', '../doc/poubelle/intérieur/atmosphera/atmosphera-60-noir.png', 'ImgBxAtmo')"></span>
                                             <span id="blanc" onclick="changeImage('atmo', '../doc/poubelle/intérieur/atmosphera/atmosphera-60-blanche.png', 'ImgBxAtmo')"></span>
                                             <span id="rouge" onclick="changeImage('atmo', '../doc/poubelle/intérieur/atmosphera/atmosphera-60-rouge.png', 'ImgBxAtmo')"></span>
                                        </div>
                                        <div class="commande">
                                        <button onclick="ajouterPanier('atmo','quantAtm',this)" id="achat" value='60'>Acheter 60€</button>
                                             <div class="quantite">
                                                  <button id="moinsAtm" onclick="moins('quantAtm', 'moinsAtm', 'plusAtm')">-</button>
                                                  <input type="text" value="0" readonly id="quantAtm">
                                                  <button id="plusAtm" onclick="plus('quantAtm', 'AtmoStock', 'moinsAtm', 'plusAtm')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sAtmo" onclick="affStock('AtmoStock')">Stock 
                                                  <div class="allStock" id="AtmoStock">687</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Push</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'push')" style="background-image: url(../doc/poubelle/intérieur/push/push-120-gris.png); background-size: 0px;" onmouseleave="disparition(event, 'push')" onmouseenter="apparition(event, 'push')" id="ImgBxPush">
                                        <img src="../doc/poubelle/intérieur/push/push-120-gris.png" id="push" alt="Push">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Push</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="gris" onclick="changeImage('push', '../doc/poubelle/intérieur/push/push-120-gris.png', 'ImgBxPush')"></span>
                                             <span id="rose" onclick="changeImage('push', '../doc/poubelle/intérieur/push/push-120-rose.png', 'ImgBxPush')"></span>
                                             <span id="bleu" onclick="changeImage('push', '../doc/poubelle/intérieur/push/push-120-bleu.png', 'ImgBxPush')"></span>
                                             <span id="rouge" onclick="changeImage('push', '../doc/poubelle/intérieur/push/push-120-rouge.png', 'ImgBxPush')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('push','quantPus',this)" id="achat" value='120'>Acheter 120€</button>
                                             <div class="quantite">
                                                  <button id="moinsPus" onclick="moins('quantPus', 'moinsPus', 'plusPus')">-</button>
                                                  <input type="text" value="0" readonly id="quantPus">
                                                  <button id="plusPus" onclick="plus('quantPus', 'PushStock', 'moinsPus', 'plusPus')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sPush" onclick="affStock('PushStock')">Stock 
                                                  <div class="allStock" id="PushStock">743</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="interieurBot">
                         <div class="container">
                              <div class="card">
                                   <p>Decor</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'deco')" style="background-image: url(../doc/poubelle/intérieur/decor/decor-230-argent.jpg); background-size: 0px;" onmouseleave="disparition(event, 'deco')" onmouseenter="apparition(event, 'deco')">
                                        <img src="../doc/poubelle/intérieur/decor/decor-230-argent.jpg" id="deco" alt="Decor">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Decor</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="gris"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('deco','quantDec',this)" id="achat" value='230'>Acheter 230€</button>
                                             <div class="quantite">
                                                  <button id="moinsDec" onclick="moins('quantDec', 'moinsDec', 'plusDec')">-</button>
                                                  <input type="text" value="0" readonly id="quantDec">
                                                  <button id="plusDec" onclick="plus('quantDec', 'DecoStock', 'moinsDec', 'plusDec')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sDeco" onclick="affStock('DecoStock')">Stock 
                                                  <div class="allStock" id="DecoStock">419</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Collecteur</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'coll')" style="background-image: url(../doc/poubelle/intérieur/collecteur/collecter-200-vert.png); background-size: 0px;" onmouseleave="disparition(event, 'coll')" onmouseenter="apparition(event, 'coll')" id="ImgBxColl">
                                        <img src="../doc/poubelle/intérieur/collecteur/collecter-200-vert.png" id="coll" alt="Collecteur">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Collecteur</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="vert" onclick="changeImage('coll', '../doc/poubelle/intérieur/collecteur/collecter-200-vert.png', 'ImgBxColl')"></span>
                                             <span id="jaune" onclick="changeImage('coll', '../doc/poubelle/intérieur/collecteur/collecter-200-jaune.png', 'ImgBxColl')"></span>
                                             <span id="bleu" onclick="changeImage('coll', '../doc/poubelle/intérieur/collecteur/collecter-200-bleu.png', 'ImgBxColl')"></span>
                                             <span id="rouge" onclick="changeImage('coll', '../doc/poubelle/intérieur/collecteur/collecter-200-rouge.png', 'ImgBxColl')"></span>
                                             <span id="gris" onclick="changeImage('coll', '../doc/poubelle/intérieur/collecteur/collecter-200-gris.png', 'ImgBxColl')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('coll','quantCol',this)" id="achat" value='200'>Acheter 200€</button>
                                             <div class="quantite">
                                                  <button id="moinsCol" onclick="moins('quantCol', 'moinsCol', 'plusCol')">-</button>
                                                  <input type="text" value="0" readonly id="quantCol">
                                                  <button id="plusCol" onclick="plus('quantCol', 'CollStock', 'moinsCol', 'plusCol')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sColl" onclick="affStock('CollStock')">Stock 
                                                  <div class="allStock" id="CollStock">241</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
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
                         <div class="container">
                              <div class="card">
                                   <p>Coogee</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'coog')" style="background-image: url(../doc/poubelle/extérieur/coogee/coogee-350-vert-rouge.png); background-size: 0px;" onmouseleave="disparition(event, 'coog')" onmouseenter="apparition(event, 'coog')" id="ImgBxCoog">
                                        <img src="../doc/poubelle/extérieur/coogee/coogee-350-vert-rouge.png" id="coog" alt="Coogee">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Coogee</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="vert" onclick="changeImage('coog', '../doc/poubelle/extérieur/coogee/coogee-350-vert-rouge.png', 'ImgBxCoog')"></span>
                                             <span id="bleu" onclick="changeImage('coog', '../doc/poubelle/extérieur/coogee/coogee-350-bleu-jaune.png', 'ImgBxCoog')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('coog','quantCog',this)" id="achat" value='350'>Acheter 350€</button>
                                             <div class="quantite">
                                                  <button id="moinsCog" onclick="moins('quantCog', 'moinsCog', 'plusCog')">-</button>
                                                  <input type="text" value="0" readonly id="quantCog">
                                                  <button id="plusCog" onclick="plus('quantCog', 'CoogStock', 'moinsCog', 'plusCol')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sCoog" onclick="affStock('CoogStock')">Stock 
                                                  <div class="allStock" id="CoogStock">75</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Hanko</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'hank')" style="background-image: url(../doc/poubelle/extérieur/Hanko/Hanko-1250-jaune.png); background-size: 0px;" onmouseleave="disparition(event, 'hank')" onmouseenter="apparition(event, 'hank')" id="ImgBxHank">
                                        <img src="../doc/poubelle/extérieur/Hanko/Hanko-1250-jaune.png" id="hank" alt="Hanko">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Hanko</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="jaune" onclick="changeImage('hank', '../doc/poubelle/extérieur/Hanko/Hanko-1250-jaune.png', 'ImgBxHank')"></span>
                                             <span id="vert" onclick="changeImage('hank', '../doc/poubelle/extérieur/Hanko/Hanko-1250-verte.png', 'ImgBxHank')"></span>
                                             <span id="bleu" onclick="changeImage('hank', '../doc/poubelle/extérieur/Hanko/Hanko-1250-bleu.png', 'ImgBxHank')"></span>
                                             <span id="gris" onclick="changeImage('hank', '../doc/poubelle/extérieur/Hanko/Hanko-1250-gris.png', 'ImgBxHank')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('hank','quantHan',this)" id="achat" value='1250'>Acheter 1250€</button>
                                             <div class="quantite">
                                                  <button id="moinsHan" onclick="moins('quantHan', 'moinsHan', 'plusHan')">-</button>
                                                  <input type="text" value="0" readonly id="quantHan">
                                                  <button id="plusHan" onclick="plus('quantHan', 'HankStock', 'moinsHan', 'plusHan')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sHank" onclick="affStock('HankStock')">Stock 
                                                  <div class="allStock" id="HankStock">41</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Rossignol</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'ross')" style="background-image: url(../doc/poubelle/extérieur/rossignol/rossignol-337-bleu.png); background-size: 0px;" onmouseleave="disparition(event, 'ross')" onmouseenter="apparition(event, 'ross')" id="ImgBxRoss">
                                        <img src="../doc/poubelle/extérieur/rossignol/rossignol-337-bleu.png" id="ross" alt="Rossignol">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Rossignol</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="bleu" onclick="changeImage('ross', '../doc/poubelle/extérieur/rossignol/rossignol-337-bleu.png', 'ImgBxRoss')"></span>
                                             <span id="gris" onclick="changeImage('ross', '../doc/poubelle/extérieur/rossignol/rossignol-337-gris.png', 'ImgBxRoss')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('ross','quantRos',this)" id="achat" value='337'>Acheter 337€</button>
                                             <div class="quantite">
                                                  <button id="moinsRos" onclick="moins('quantRos', 'moinsRos', 'plusRos')">-</button>
                                                  <input type="text" value="0" readonly id="quantRos">
                                                  <button id="plusRos" onclick="plus('quantRos', 'RossStock', 'moinsRos', 'plusRos')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sRoss" onclick="affStock('RossStock')">Stock 
                                                  <div class="allStock" id="RossStock">267</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Tulipe</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'tuli')" style="background-image: url(../doc/poubelle/extérieur/tulipe/tulipe-215-vert.png); background-size: 0px;" onmouseleave="disparition(event, 'tuli')" onmouseenter="apparition(event, 'tuli')" id="ImgBxTuli">
                                        <img src="../doc/poubelle/extérieur/tulipe/tulipe-215-vert.png" id="tuli" alt="Tulipe">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Tulipe</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="vert" onclick="changeImage('tuli', '../doc/poubelle/extérieur/tulipe/tulipe-215-vert.png', 'ImgBxTuli')"></span>
                                             <span id="noir" onclick="changeImage('tuli', '../doc/poubelle/extérieur/tulipe/tulipe-215-noir.png', 'ImgBxTuli')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('tuli','quantTul',this)" id="achat" value='215'>Acheter 215€</button>
                                             <div class="quantite">
                                                  <button id="moinsTul" onclick="moins('quantTul', 'moinsTul', 'plusTul')">-</button>
                                                  <input type="text" value="0" readonly id="quantTul">
                                                  <button id="plusTul" onclick="plus('quantTul', 'TuliStock', 'moinsTul', 'plusCol')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sTuli" onclick="affStock('TuliStock')">Stock 
                                                  <div class="allStock" id="TuliStock">78</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="exterieurBot">
                         <div class="container">
                              <div class="card">
                                   <p>Conteneur</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'cont')" style="background-image: url(../doc/poubelle/extérieur/conteneur/conteneur-180-jaune.png); background-size: 0px;" onmouseleave="disparition(event, 'cont')" onmouseenter="apparition(event, 'cont')" id="ImgBxCont">
                                        <img src="../doc/poubelle/extérieur/conteneur/conteneur-180-jaune.png" id="cont" alt="Conteneur">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Conteneur</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="jaune" onclick="changeImage('cont', '../doc/poubelle/extérieur/conteneur/conteneur-180-jaune.png', 'ImgBxCont')"></span>
                                             <span id="bleu" onclick="changeImage('cont', '../doc/poubelle/extérieur/conteneur/conteneur-180-bleu.png', 'ImgBxCont')"></span>
                                             <span id="vert" onclick="changeImage('cont', '../doc/poubelle/extérieur/conteneur/conteneur-180-vert.png', 'ImgBxCont')"></span>
                                             <span id="rouge" onclick="changeImage('cont', '../doc/poubelle/extérieur/conteneur/conteneur-180-rouge.png', 'ImgBxCont')"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('cont','quantCon',this)" id="achat" value='180'>Acheter 180€</button>
                                             <div class="quantite">
                                                  <button id="moinsCon" onclick="moins('quantCon', 'moinsCon', 'plusCon')">-</button>
                                                  <input type="text" value="0" readonly id="quantCon">
                                                  <button id="plusCon" onclick="plus('quantCon', 'ContStock', 'moinsCon', 'plusCon')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sCont" onclick="affStock('ContStock')">Stock 
                                                  <div class="allStock" id="ContStock">468</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="container">
                              <div class="card">
                                   <p>Grand Conteneur</p>
                                   <div class="imgBx" onmousemove="zoomImg(event, 'gCont')" style="background-image: url(../doc/poubelle/extérieur/Gconteneur/Gconteneur-310-bleu.png); background-size: 0px;" onmouseleave="disparition(event, 'gCont')" onmouseenter="apparition(event, 'gCont')">
                                        <img src="../doc/poubelle/extérieur/Gconteneur/Gconteneur-310-bleu.png" id="gCont" alt="GrandConteneur">
                                   </div>
                                   <div class="contentBx">
                                        <h2>Grand Conteneur</h2>
                                        <div class="color">
                                             <h3>Couleur</h3>
                                             <span id="bleu"></span>
                                        </div>
                                        <div class="commande">
                                             <button onclick="ajouterPanier('gCont','quantGco',this)" id="achat" value='310'>Acheter 310€</button>
                                             <div class="quantite">
                                                  <button id="moinsGco" onclick="moins('quantGco', 'moinsGco', 'plusGco')">-</button>
                                                  <input type="text" value="0" readonly id="quantGco">
                                                  <button id="plusGco" onclick="plus('quantGco', 'GContStock', 'moinsGco', 'plusGco')">+</button>
                                             </div>
                                        </div>
                                        <div class="stock">
                                             <button type="button" id="sGCont" onclick="affStock('GContStock')">Stock 
                                                  <div class="allStock" id="GContStock">55</div>
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
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