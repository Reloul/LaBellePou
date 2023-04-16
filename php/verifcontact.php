<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $emailcontact = $_POST["emailcontact"];
    $message = $_POST["message"];
    $dateN = $_POST["dateN"];
    $genre = $_POST["genre"];
    $hommeChecked = '';
    $femmeChecked = '';
    $nh90Checked = '';

    $error = false;
    
    if (!preg_match("/^[a-zA-Z-]+$/", $prenom)) {
        $error = true;
        $prenomverif = "⚠️ Veuillez entrer un prénom valide ⚠️";
        $prenomclass = "error";
    }

    if (!preg_match("/^[a-zA-Z-]+$/", $nom)) {
        $error = true;
        $nomverif = "⚠️ Veuillez entrer un nom valide ⚠️";
        $nomclass = "error";
    }

    if (!filter_var($emailcontact, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailexe = "⚠️ Veuillez entrer une adresse email valide (exemple@email.fr) ⚠️";
        $emailclass = "error";
    }

    if (empty($message)) {
        $error = true;
        $messverif = "⚠️ Veuillez entrer la raison de votre contact ⚠️";
        $messstyle = "background-color: #ff6e6b;";
    }

    if (!isset($genre)) {
        $error = true;
        $genreverif = "⚠️ Veuillez sélectionner votre genre ⚠️";
    }

    switch ($genre) {
        case 'Homme':
          $hommeChecked = 'checked';
          break;
        case 'Femme':
          $femmeChecked = 'checked';
          break;
        case 'NH90':
          $nh90Checked = 'checked';
          break;
        default:
          break;
      }

    $dateObj = DateTime::createFromFormat('Y-m-d', $dateN);
    if (!($dateObj && $dateObj->format('Y-m-d') === $dateN && $dateObj < new DateTime())) {
        $error = true;
        $verifnaiss = "⚠️ Veuillez entrer une date de naissance valide ⚠️";
        $dateNclass = "error";
    }
    
    if (!$error) {
        $envoi = "Le formulaire a été soumis avec succès.";
    }
}
?>
