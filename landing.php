<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:login.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM client WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="en">
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
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<figure class='error'>Le mot de passe actuel est incorrect</figure>";
                                break;

                                case 'success_password':
                                    echo "<figure class='success'>Le mot de passe a bien été modifié ! </figure>";
                                break; 
                            }
                        }
                    ?>


                
                        <h2 >Bonjour <?php echo $data['pseudo']; ?> !</h1>
                        <hr>
                        <a href="deconnexion.php" class="deco">Déconnexion</a>
                     
      
                      
                            
                         
                                <form action="layouts/change_password.php" method="POST">  
                                    <h3 class="modal-title">Changer mon mot de passe</h5>
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <input type="submit" value="Sauvegarder">
                                </form>
                      
                     
                            
        
            </section>

       
</main>
   <footer>
       <p>@ - Gaming - 2022</p>
    </footer>       
<script src="./js/app.js"></script>
</body>
</html>