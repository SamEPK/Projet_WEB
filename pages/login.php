<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Maison des sports</title>
</head>
<body>
    <header>
        <h1>Maison des ligues tous les sports</h1>
        <a href="../accueil.php"><img src="../asset/logo.png" alt="icone de sport"></a>
    </header>
    <main>
    <section>
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> mot de passe incorrect
                            </figure>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> email incorrect
                            </figure>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <figure class="error">
                                <strong>Erreur</strong> compte non existant
                            </figure>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="post">
                <h2>Connexion</h2>       
              
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
               
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
               
                    <input type="submit" value="Envoyer">
                
            </form>
            <a href="inscription.php" class="inscrip">Inscription</a>
     
    </section>

       
    </main>
       <footer>
           <p>@ - Maison des ligues - 2022</p>
        </footer>       
  <script src="./js/app.js"></script>
</body>
</html>

