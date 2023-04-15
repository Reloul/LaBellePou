<?php
     session_start();
     include 'deconnexion.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta content ="charset=UTF-8">
    <meta name="author" lang="fr" content="Latry Ugo & Serres Valentin">
    <title> La Bellepou | Site Officiel de Poubelles </title>
    <link rel="stylesheet" type="text/css" href="css/Bellepou.css">
</head>
<body>
    <header class="haut">
        <div class="name">
            <h1 id="titre">La Bellepou</h1>
        </div>
        <?php if ($isLoggedIn) { ?>
        <div class="compte">
            <div class="email"> Bonjour <?php echo $email; ?> !</div>
            <div>
                <form method="post" action="">
                    <input type="submit" name="logout" value="Déconnexion" id="deconnexion" class="deconnexion">
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="compte">
            <a href="./inscription.php" class="inscription">Inscription</a>
            <a href="./connexion.php" class="connexion">Connexion</a>
        </div>
    <?php } ?>
    </header>
</body>
</html>