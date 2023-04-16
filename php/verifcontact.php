<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $emailcontact = $_POST["emailcontact"];
    $message = $_POST["message"];
    $dateN = $_POST["dateN"];

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

    if (!isset($_POST['genre'])) {
        $error = true;
        $genreverif = "⚠️ Veuillez sélectionner votre genre ⚠️";
    }

    if (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $dateN, $matches)) {
        $day = $matches[1];
        $month = $matches[2];
        $year = $matches[3];
        
        if (strtotime("$year-$month-$day") > time()) {
            $error = true;
            $verifnaiss = "⚠️ Veuillez entrer une date de naissance antérieure ou égale à la date du jour ⚠️";
            $dateNclass = "error";
        }
    } else {
        $error = true;
        $verifnaiss = "⚠️ Veuillez entrer une date de naissance valide ⚠️";
        $dateNclass = "error";
    }
    
    


    if (!$error) {
        $envoi = "Le formulaire a été soumis avec succès.";
    }
}
?>
