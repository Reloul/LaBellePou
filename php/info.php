<?php
session_start();

$produit = $_POST;
$email = $_SESSION['email'];

$data = [];

for ($i = 0; $i < count($produit['nom']); $i++) {
    $item = [
        'nom' => $produit['nom'][$i],
        'prix' => $produit['prix'][$i],
        'quantite' => $produit['quant'][$i],
        'srcImg' => $produit['img'][$i]
    ];

    $data[] = $item;
}

$jsonData = json_decode(file_get_contents('../json/info.json'), true);

if (!$jsonData) {
    $jsonData = [];
}

$jsonData[$email] = $data;

file_put_contents('../json/info.json', json_encode($jsonData, JSON_PRETTY_PRINT));
header('Location: ../php/produit.php');
exit();
?>