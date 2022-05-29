<?php 
    session_start();
    require_once './pages/config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM client WHERE id = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
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
        <a href="./pages/deconnexion.php" class="connex">Déconnexion</a>
        <h1>Maison des ligues tous les sports</h1>
        <img src="./asset/logo.png" alt="steam_logo">
        
    </header>
    <main>
    <section>
    <h2>Bonjour <?php echo $data['pseudo']; ?> ! Prêt à la compétition?</h2>
      <p>Tous les mois profitez de toutes les nouveautés et opportunités. A partir du mois
        prochain on vous propose toutes les séance de sport sur vos support préférés</p>
    </section>

    <ul class="grid-picture-large" aria-hidden="true">
    <?php
    $request = $bdd->query('SELECT * FROM evenement');

    while ($donnees = $request->fetch()) {
    ?>
                <li data-image="<?php echo htmlspecialchars($donnees['image']); ?>" data-title="<?php echo htmlspecialchars($donnees['nom']); ?>"
                    data-description="<?php echo htmlspecialchars($donnees['desc']); ?>"
                    data-dates="<?php echo htmlspecialchars($donnees['date_modification']); ?>">
                    <figure>
                        <img src="<?php echo htmlspecialchars($donnees['image']); ?>" alt="<?php echo htmlspecialchars($donnees['nom']); ?>">
                        <figcaption>
                            <h2>
                                <i class="material-icons" aria-hidden="true">
                                    pages
                                </i>
                                Agrandir

                            </h2>
                        </figcaption>

                    </figure>
                </li>
                <?php
    }

    $request->closeCursor(); // Fin de requète SQL

    ?>

            </ul>      
    </main>
   
       <footer class=pied_membre>
       <p>@ - Maison des ligues - 2022</p>
        </footer>    
        <!-- modale -->
    <div class="parent-modale" role="dialog">
      <figure class="modale">
          <button aria-label="closed">
              <span class="material-icons">clear</span>
          </button>
          <img src="https://via.placeholder.com/500" alt="picture">
          <figcaption class="desc">
              <h3>title</h3>
              <p>
                 
              </p>
              <time>Years : </time> <br>
              <input type="submit" aria-label="Participer" value="Participer">
          </figcaption>
      </figure>
  </div>
  <script src="./js/app.js"></script>
</body>
</html>