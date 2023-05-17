<?php

    $panier = file_get_contents("../json/info.json");
    $_SESSION["panier"] = json_decode($panier, true);

    require_once("bdd.php");
               
    if(!bddConnecter()){
        try{
            Connexion();
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
    $result =array();
    try{
        $categorie = recCat();
        foreach($categorie as $cat){
            $poubelle = recPoubelle(null, $cat['idCategorie'],null,null);
            $catPoubelle = array();
            foreach($poubelle as $pou){
                $couleur = recCouleur($pou['idPoubelle'],'');
                $pou['couleur'] = $couleur;
                $catPoubelle[] = $pou;
            }
            $result[$cat['nom']] = $catPoubelle;
        }
        $_SESSION['produit'] = $result;
    }catch(Exception $e){
        echo $e->getMessage();
    }
    
?>