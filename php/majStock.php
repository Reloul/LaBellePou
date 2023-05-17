<?php
require_once("bddDATA.php");
function Connexion(){
  global $basedd;

  $basedd = mysqli_connect(SERV, USER, PSWRD, BASE);

  if(!$basedd){
      throw new Exception(mysqli_connect_error());
  }

  return true;
}

$id = $_GET['id'];
$quantite = $_GET['quantite'];

$req = "UPDATE Produit SET quantite = $quantite WHERE id = $id";
$result = mysqli_query($basedd, $req);
?>
