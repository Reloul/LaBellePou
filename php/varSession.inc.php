<?php
    $produit = file_get_contents("../json/produit.json");
    $_SESSION["produit"] = json_decode($produit, true);

    $panier = file_get_contents("../json/info.json");
    $_SESSION["panier"] = json_decode($panier, true);
    
?>