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
            <section class="rhr">
                <h2 class="remplir">Inscription</h2><hr>
            </section>                    
              
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
           
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
         
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
          
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            
                    <input type="submit" value="Inscription">
                    <a href="pages/login.php">Déjà un compte ?</a>
              
            </form>
        </section>