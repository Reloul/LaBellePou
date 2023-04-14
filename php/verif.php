<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = "";

    if (empty($email) || empty($password)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
         $json = file_get_contents('../json/users.json');
         $users = json_decode($json, true)['users'];
 
         $userFound = false;
         foreach ($users as $user) {
             if ($user['email'] == $email && $user['password'] == $password) {
                 $userFound = true;
                 break;
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