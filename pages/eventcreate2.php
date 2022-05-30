<?php
      if(!empty($_POST) && isset($_SESSION["user"]) && $_GET['id_event']){
        try {
            $_date = new DateTime();
            $_date = $_date->format('Y-m-d H:i:s');
            $_req = $_bdd->prepare('INSERT INTO historique_client(idClient, idEvenement, date_consultation) VALUES (:idClient, :idEvenement, :date_consultation)');
            $_req->execute(array(
                'idClient' => $_SESSION['user'],
                'idEvenement' => $_GET['id_event'],
                'date_consultation' => $_date,
            ));
            
            print_r($_SESSION['user'], $_GET['id_event'], $_date);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
            
    }   
?>