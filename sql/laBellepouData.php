<?php
    session_start();
    $produit = $_SESSION['produit'];
    $base = 'Produits';
    $connect = mysqli_connect('localhost','valentin','testmoi123',$base);
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }
    $boolRes = mysqli_select_db($connect, $base);
    if (!$boolRes) throw new Exception($base.' introuvable');
    $compteProd = 1;
    $compteCoul = 1;
    
    for($i = 1; $i < 4;$i++){
        switch($i){
            case 1:
                $cateorie = 'corbeille';
                break;
            case 2:
                $cateorie = 'intérieur';
                break;
            case 3:
                $cateorie = 'extérieur';
                break;
        }
        $reqCat = 'INSERT INTO Categorie VALUES ('.$i.',"'.$cateorie.'")';
        $result = mysqli_query($connect, $reqCat) or die('Pb req : '.$reqCat);
        foreach ($produit[$cateorie] as $prod) {
            $reqProd = 'INSERT INTO Poubelle VALUES ('.$compteProd.',"'.$prod['nom'].'",'.$prod['prix'].','.$prod['quantite'].','.$i.')';
            $result = mysqli_query($connect,$reqProd) or die('Pb req : '.$reqProd);
            foreach($prod['couleur'] as $couleur){
                foreach($couleur as $key => $images){
                    $reqCoul = 'INSERT INTO Couleur VALUES('.$compteCoul.',"'.$images[0]['idC'].'","'.$images[0]['src'].'")';
                    $result = mysqli_query($connect, $reqCoul) or die('Pb req : '.$reqCoul);
                    $reqPos = 'INSERT INTO Posseder VALUES ('.$compteProd.','.$compteCoul.')';
                    $result = mysqli_query($connect,$reqPos) or die('Pb req : '.$reqPos);
                    $compteCoul++;
                }
            }
            $compteProd++;
        }
    }
    mysqli_close($connect);
    header('Location : ../php/produit.php');
    exit;
?>