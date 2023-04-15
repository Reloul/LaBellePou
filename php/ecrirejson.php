<?php

session_start();

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
        $json = file_get_contents('../json/users.json');
        $users = json_decode($json, true)['users'];

        $userExists = false;
        foreach ($users as $user) {
            if ($user['email'] == $email) {
                $userExists = true;
                break;
            }
        }

        if ($userExists) {
            $error = "Cet email est déjà utilisé.";
        } else {
            $newUser = array('email' => $email, 'password' => $password);
            $users[] = $newUser;
            $json = json_encode(array('users' => $users), JSON_PRETTY_PRINT);
            file_put_contents('../json/users.json', $json);

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: ../index.php');
            exit;
        }
    }
}

?>