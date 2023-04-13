<?php
// Récupération des données du formulaire
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validation des données
$emailErr = '';
$passwordErr = '';
$isValid = true;

if (empty($email)) {
    $emailErr = '⚠️ Veuillez saisir votre adresse e-mail. ⚠️';
    $isValid = false;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = '⚠️ Veuillez saisir une adresse e-mail valide. ⚠️';
    $isValid = false;
}

if (empty($password)) {
    $passwordErr = '⚠️ Veuillez saisir votre mot de passe. ⚠️';
    $isValid = false;
}

// Vérification des informations de connexion
if ($isValid && $email === 'votre_email@example.com' && $password === 'votre_mot_de_passe') {
    // Connexion réussie, rediriger vers une page protégée
    header('Location: page_protegee.php');
    exit();
}
?>