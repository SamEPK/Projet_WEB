<div align="center">

# Projet AP WEB BTS <br> | BTS SIO SLAM2 | <br> `Maison des ligues - tous les sports`

</div>

## Samuel ATLANI

[Voir la page](https://samalairbien.github.io/Projet_WEB/accueil.html)

## Sommaire :

1. [Introduction](#Introduction)

2. [Fonctionnement](#Fonctionnement)

3. [Annexe_Développeur](#Annexe_Développeur)

<div align="center">

# `Introduction`

</div>

Une agence nous confie la réalisation d’une page publicitaire pour la Maison de ligues sur le web. La promotion a pour but de conquérir des nouveaux abonné(e)s, en proposant la diffusion de toutes les compétitions sportives. Pour cela nous conseille d’abord d’analyser toutes les fonctionnalités au travers des deux wireframes. Les spécifications pour le fonctionnement de chaque partie ne sont pas définies. La charte graphique doit être crée par vous.

Pour commencer vous devez tout simplement mettre en place une structure html sémantique car le contenu de cette publication est destiné à tout public. 

<div align="center">

<br>
<hr>

# `Fonctionnement`

</div>
Le site web présenté ici a pour fonctionnalité globale la possibilité de s’inscrire et de garder la session enregistrée sur une base de données afin de pouvoir se connecter. Il est aussi possible, une fois connecté, de s’inscrire à un des événements de sport présenté sur la page, cette inscription sera enregistrée et visible par le client, l’information sera aussi stockée sur la base de données. Cette interface sera décrite ici sous forme de manuel d'utilisation de la page.



## Documentation utilisateur :

<div align="center">

# Accueil

</div>

<div align="center">

<img src="./Documentation/accueil.png" alt="Accueil" width="600"/>

</div>

<br>

En premier lieu, sur la page d’accueil du site, vous aurez accès à la possibilité de vous connecter ou de vous inscrire, soit en cliquant sur “Cliquez ici pour commencer” au bas de la page ou en cliquant sur "Connexion"

<div align="center">

## Le modale

<img src="./Documentation/modale.png" alt="Employe" width="600"/>

</div>

<div align="center">

# Inscription

<img src="./Documentation/inscription.png" alt="Employe" width="600"/>

</div>




<div align="center">

# Connexion

</div>

<div align="center">

<img src="./Documentation/connexion.png" alt="Connexion" width="600"/>

</div>

<div align="center">



</div>

Une fois authentifié, l’utilisateur accède à la page suivante :

<div align="center">

# L'accueil du membre 

<img src="./Documentation/accueil_membre.png" alt="AjoutEmploye" width="600"/>






<hr>
<br>

<div align="center">

# `Annexe_Développeur`

</div>
<div align="center">
    <img src="./Documentation/MCD.png" alt="MCD" width="300"/>
</div>

    Client ( id, pseudo, email, password, date_inscription )
    Consulter ( id, date_consultation, id.1 )
    Historique_client ( date_consultation, idClient, idEvenement )
    Evenement ( id, nom, desc, date_creation, date_modification, image )