<?php

session_start();
require_once('bdd.php');

if(!bddConnecter()){
    try{
        Connexion();
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

$email = "";
$password = "";
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Veuillez entrer une adresse email valide.";
    } else {

        $userExists = false;
        foreach ($users as $user) {
            if ($user['mail'] == $email) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            $error = "Cet email est déjà utilisé.";
        } else {
            try{
                $_SESSION['user'] = addUser($email, $password);
                $user = $_SESSION['user'];
                $_SESSION['email'] = $user[0]['mail'];
                $_SESSION['password'] = $user[0]['mdp'];
            }catch(Exception $e){
                $e->getMessage();
            }
            header('Location: ../index.php');
            exit;
        }
    }
}

?>