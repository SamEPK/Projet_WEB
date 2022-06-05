<?php 
    session_start();
    require_once './pages/config.php'; // ajout connexion bdd 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Maison des sports</title>
</head>
<body>
    <header>
        <a href="profil.php" class="profil">Profil</a>
        <a href="./pages/deconnexion.php" class="connex">Déconnexion</a>
        <h1>Maison des ligues tous les sports</h1>
        <a href="accueil_membre.php"><img src="./asset/logo.png" alt="steam_logo"></a>
        
        
    </header>
    <main>
        <fieldset>
            <?php
                include_once("./pages/config.php");
                include_once("./pages/form_edit.inc.php"); 
            ?>

            <h2>Changer le profil</h2>
            <form method="post" class="formedit">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="nom" aria-required="true" value="<?php echo $_SESSION['pseudo'] ?>" autofocus required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="email" aria-required="true" value="<?php echo $_SESSION['email'] ?>" required>

                <input type="submit" value="Valider le changement">
            </form>
        </fieldset>
    </main>
    <body>