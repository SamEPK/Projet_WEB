<?php
require_once './pages/config.php'; 
            if(isset($_SESSION["user"]) && isset($_GET['id_event'])){
            
                $_date = new DateTime();
                $_date = $_date->format('Y-m-d H:i:s'); 
                // print "L'id event : " . $_GET["id_event"] . " | l'id de la session : " . $_SESSION["user"] . " | la date : " . $_date;
                try {
                $_date = new DateTime();
                $_date = $_date->format('Y-m-d H:i:s');
                $_req = $bdd->prepare('INSERT INTO historique_client(idClient, idEvenement, date_consultation) VALUES (:idClient, :idEvenement, :date_consultation)');
                $_req->execute(array(
                    'idClient' => $_SESSION['user'],
                    'idEvenement' => $_GET['id_event'],
                    'date_consultation' => $_date,
                ));
                // print $_SESSION['user'] . $_GET['id_event'] . $_date;
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        ?>   