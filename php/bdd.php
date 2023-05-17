<?php

require_once("bddDATA.php");

$basedd = NULL;

function Connexion(){
    global $basedd;

    $basedd = mysqli_connect(SERV, USER, PSWRD, BASE);

    if(!$basedd){
        throw new Exception(mysqli_connect_error());
    }

    return true;
}


function Deconnexion(){
    global $basedd;
    if ($basedd == NULL){
        throw new mysqli_sql_exception("La BDD n'est pas connectée");
    }
    mysqli_close($basedd);

    return true;
}

function bddConnecter(){
    global $basedd;
    return($basedd != NULL);
}

function recCat(){
    global $basedd;
    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }
    $req = "SELECT * FROM Categorie";
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête a echouée.");
    }

    $cat = array();
    while($row = mysqli_fetch_array($result)){
        $cat[] = $row;
    }

    return $cat;
}

function recPoubelle($id, $idCat, $nom, $idUser){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }

    if($id != NULL){
        $req = "SELECT * FROM Poubelle WHERE idPoubelle =".$id;
    }else if($idCat != NULL){
        $req = "SELECT * FROM Poubelle WHERE idCat =".$idCat;
    }else if($idUser != NULL){
        $req = "SELECT * FROM Poubelle WHERE idPoubelle = (SELECT idPou FROM Acheter WHERE idUser =".$idUser.")";
    }else if($nom == '' || $nom == NULL){
        $req = "SELECT * FROM Poubelle WHERE nom=".$nom;
    }else{
        $req = "SELECT * FROM Poubelle";
    }
    $result = mysqli_query($basedd, $req);

    if(!$result){
        throw new Exception("La requête a échoué");
    }
    $produit = array();
    while($row = mysqli_fetch_array($result)){
        $produit[] = $row;
    }
    return $produit;
}

function recCouleur($idPou, $nom){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }
    
    if($idPou != NULL){
        $req = "SELECT * FROM Couleur WHERE idCouleur IN ( SELECT idCoul FROM Posseder WHERE idPoub =".$idPou.")";
    }else{
        $req = "SELECT * FROM Couleur WHERE nom=".$nom;
    }
    
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête de couleur a échoué");
    }
    $produit = array();
    while($row = mysqli_fetch_array($result)){
        $produit[] = $row;
    }
    return $produit;
}

function recUtilisateur($idUser, $login){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }
    switch ($idUser){
        case NULL:
            $req = "SELECT * FROM Utilisateur WHERE mail =".$login;
            break;
        default:
            $req = "SELECT * FROM Utilisateur WHERE idUser=".$idUser;
    }
    
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête a échoué");
    }
    $produit = array();
    while($row = mysqli_fetch_array($result)){
        $produit[] = $row;
    }
    return $produit;
}

function addUser($mail, $mdp){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'es pas connectée");
    }
    $req = 'INSERT INTO Utilisateur VALUES(null,"'.$mail.'",'.$mdp.')';
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête a échouée");
    }
    return(recUtilisateur(null, $mail));
}

function addAchat($idPou, $idUser, $idQuant, $idPrix){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }
    $req = 'INSERT INTO Acheter VALUES('.$idPou.",".$idUser.",".$idQuant.','.$idPrix.')';
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête a échouée");
    }
    return true;
}

function recAchat($idUser){
    global $basedd;

    if($basedd == NULL){
        throw new Exception("La BDD n'est pas connectée");
    }
    $req ='SELECT * FROM Acheter WHERE idUser='.$idUser;
    $result = mysqli_query($basedd, $req);
    if(!$result){
        throw new Exception("La requête a échouée");
    }
    $produit = array();
    while($row = mysqli_fetch_array($result)){
        $produit[] = $row;
    }
    return $produit;
}

?>