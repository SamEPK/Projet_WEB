<?php 
    try 
    {
        // $bdd = new PDO("mysql:host=localhost;dbname=apweb;charset=utf8", 'root', '');
        $bdd = new PDO("mysql:host=172.190.1.52;dbname=satlani;charset=utf8", 'satlani', '1595');
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
