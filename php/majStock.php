<?php
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$conn = new mysqli('localhost', 'latryugo', 'guillaumelepd', 'Produits');

// Vérifier si la connexion à la base de données a réussi
if ($conn->connect_error) {
  die('Erreur de connexion à la base de données : ' . $conn->connect_error);
}

// Mettre à jour la quantité dans la base de données
$query = 'UPDATE Poubelle SET quantite = quantite + $quantity WHERE idPoubelle = $productId';
$result = $conn->query($query);

// Vérifier si la mise à jour a réussi
if ($result) {
  echo 'Quantité mise à jour avec succès.';
} else {
  echo 'Erreur lors de la mise à jour de la quantité : ' . $conn->error;
}

// Fermer la connexion à la base de données
$conn->close();
?>
