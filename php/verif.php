<?php
session_start();

require_once 'bdd.php';
Connexion();
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";

    if (empty($email) || empty($password)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
        try{
            $users = recUtilisateur(null,null);
        }catch  (Exception $e){
            echo $e->getMessage();
        }
 
         $userFound = false;
         foreach ($users as $user) {
             if ($user['mail'] == $email && $user['mdp'] == $password) {
                $userFound = true;
             }
         }
 
         if ($userFound) {
             $_SESSION['email'] = $email;
             $_SESSION['password'] = $password;
             header('Location: ../index.php');
             exit;
         } else {
             $error = "Email ou mot de passe incorrect";
         }
    }
}
?>