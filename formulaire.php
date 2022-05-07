<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/Steam_icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Steam - Formulaire</title>
</head>
<body>
    <header>
        <h1>Jeux, Visuals Novels et bien plus en illimité.</h1> 
        <a href="./accueil.php"><img src="./asset/logo_steam.svg" alt="steam_logo"></a>
    </header>
    <main>
    <section>
        <h2>Prêt à jouer ? Remplissez le formulaire proposé dans cette page</h2>
        <p>Tous les mois profitez de toutes les nouveautés jeux et visuals novels.
            A partir du mois prochain on vous propose tous les classiques du jeux-vidéos.
            Tous les jeux en VO, VOST, VF et plus d'options.</p>
    </section>
    <ul class="grid-picture-large">
      <li
      data-image="./asset/Y0.png" 
      data-title="Yakuza 0" 
      data-description="c'est un film épatant, entre action et émotion..." 
      data-dates="02/01/2020">
            <figure>
              <img src="./asset/Y0.png" alt="Y0">
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
      <li 
      data-image="./asset/MGS2.png" 
      data-title="Metal Gear Solid 2" 
      data-description="c'est un film épatant, entre action et émotion..." 
      data-dates="02/01/2020">
      <figure>
        <img src="./asset/MGS2.png" alt="MGS2">
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
        <li 
        data-image="./asset/SG.png" 
        data-title="Steins;Gate" 
        data-description="c'est un film épatant, entre action et émotion..." 
        data-dates="02/01/2020">
        <figure>
          <img src="./asset/SG.png" alt="SG">
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
       <li 
       data-image="./asset/AC.png" 
       data-title="Assassin's Creed" 
       data-description="c'est un film épatant, entre action et émotion..." 
       data-dates="02/01/2020">
       <figure>
          <img src="./asset/AC.png" alt="AC">
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
        <li 
        data-image="./asset/Muramasa.png" 
        data-title="Fullmetal Daemon Muramasa" 
        data-description="c'est un film épatant, entre action et émotion..." 
        data-dates="02/01/2020">
        <figure>
           <img src="./asset/Muramasa.png" alt="Muramasa">
          <figcaption>
            <h2>
              <i class="material-icons" aria-hidden="true">
                pages
            </i>
            Agrandir
                
            </h2>
          </figcaption>
        </figure></li>
    </ul>
    <section class="rhr">
        <h2 class="remplir">Remplissez le formulaire</h2><hr>
    </section>
    <figure class="form" role="form">
    <form method="get">     
        <fieldset>
        <label>Nom :
          <input  type="text" id="submitted-nom" placeholder="Nom" aria-required="true">
        </label>

        <label>Prénom :
            <input type="text" id="submitted-prenom" placeholder="Prénom" aria-required="true">
          </label>

          <label>E-Mail :
            <input type="email" id="submitted-mail" placeholder="E-Mail" aria-required="true">
          </label>

          <label for="city">Ville :</label>
            <select name="city" id="city">
                <option value="">Ville</option>
                <option value="Paris">Paris</option>
                <option value="Créteil">Créteil</option>
                <option value="Marseille">Marseille</option>
                <option value="Nice">Nice</option>
                <option value="Lyon">Lyon</option>
                <option value="Maisons-Alfort">Maisons-Alfort</option>
            </select>

            <label for="country">Pays :</label>
            <select name="country" id="country">
                <option value="">Pays</option>
                <option value="France">France</option>
                <option value="Espagne">Espagne</option>
                <option value="Etats-Unis">Etats-Unis</option>
                <option value="Chine">Chine</option>
                <option value="Japon">Japon</option>
                <option value="Argentine">Argentine</option>
            </select>

            <input type="submit" aria-label="Valider" value="Valider">
       </fieldset>  
    </form> 
    </figure>
    </main>
    <footer><p>@ - Gaming - 2022</p></footer>
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
              <time>Years : </time>
          </figcaption>
      </figure>
  </div>
  <script src="./js/app.js"></script>
</body>

</html>