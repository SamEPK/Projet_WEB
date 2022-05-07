<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/Steam_icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Steam</title>
</head>
<body>
    <header>
        <h1>Jeux, Visuals Novels et bien plus en illimité.</h1> 
        <a href="./accueil.php"><img src="./asset/logo_steam.svg" alt="steam_logo"></a>
        
    </header>
    <main>
            <section>
      
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <figure class="success">
                                <strong>Succès</strong> Inscription réussie !
                            </figure>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> Mot de passe différent.
                            </figure>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> Email non valide.
                            </figure>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> Email trop long.
                            </figure>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> Nom trop long.
                            </difigurev>
                        <?php 
                        case 'already':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> Compte déjà existant.
                            </figure>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
              
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
           
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
         
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
          
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            
                    <input type="submit" value="Inscription">
                    <a href="./login.php">Déjà un compte ?</a>
              
            </form>
        </section>
    </main>
        </body>
</html>
