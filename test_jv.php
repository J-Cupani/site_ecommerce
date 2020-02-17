<?php


try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video');



// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{


    ?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />

    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
?>
