<?php include_once("./pages/config.php");

try {
    $sqlQuery = 'SELECT DISTINCT evenement.nom, evenement.desc, date_consultation, idClient FROM historique_client
                INNER JOIN evenement ON historique_client.idEvenement = evenement.id
                WHERE historique_client.idClient = :idClient
                GROUP BY historique_client.idEvenement, historique_client.date_consultation, evenement.nom, evenement.desc
                ORDER BY historique_client.date_consultation DESC LIMIT 10';

    $recipesStatement = $bdd->prepare($sqlQuery);
    $recipesStatement->execute(array(
        'idClient' => $_SESSION['user'],
    ));
    $users = $recipesStatement->fetchAll();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


print '<table class ="table-primary">' . '<th>' . "Nom de l'événement" . '</th>' . '<th>' . "Description de l'événement" . '</th>' . '<th>' . "Date de l'événement" . '</th>'. '<th>' . "Date de la consultation" . '</th>';
foreach ($users as $user) {
    if (isset($user['idClient']) == $_SESSION['user']) {
        echo
        '</tr>' .
            '<tr>' . '<td>' . $user['nom'] . '</td>' . '<td>' 
            . $user['desc'] . '</td>' . '<td>'
            . $user['date_consultation'] . '</td>' . '<td>' 
            . $user['date_consultation'] . '</td>' ;
            
    }
}
print '</tr> ' . ' </table>';
?>