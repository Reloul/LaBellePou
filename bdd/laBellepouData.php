<?php
    $produit = $_SESSION['produit'];
    $base = 'Produits';
    $connect = mysqli_connect('localhost','valentin','testmoi123',$base);
    if(mysqli_connect_errno()){
        echo mysqli_connect_error();
    }
    $boolRes = mysqli_select_db($connect, $base);
    if (!$boolRes) throw new Exception($base.' introuvable');
    $compteCat = 0;
    $compteProd = 0;
    $compteCoul = 0;
    $req = 'INSERT INTO Categorie VALUES ('.$compteCat.', Corbeille)';
    $result = mysqli_query($connect, $req);
    foreach ($produit['Corbeille'] as $prod) {
            $req = 'INSERT INTO Poubelle VALUES ('.$compteProd.','.$nomProd['nom'].','.$nomProd['prix'].','.$nomProd['quantite'].','.$compte.')';
            $result = mysqli_query($connect,$req);
            $compteProd++;
            foreach($nomProd['couleur'] as $couleur){
                foreach($couleur as $key => $images){
                    foreach($images as $image){
                        $req = 'INSERT INTO Couleur VALUES('.$compteCoul.','.$image['idImg'].','.$image['src'].')';
                        $result = mysqli_query($connect, $req);
                        $req = 'INSERT INTO Posseder VALUES ('.$compteProd.','.$compteCoul.')';
                        $result = mysqli_query($connect,$req);
                        $compteCoul++;
                    }
                }
            }
        }
    mysqli_close($connect);
?>