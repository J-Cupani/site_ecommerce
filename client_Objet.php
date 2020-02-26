<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();
include('function_Objet.php');
include('class_Objet.php');
menu();

$listeClients = new ListeClients();
$reponse = $bdd->query('Select firstName, name, address, CP, city FROM client');
while ($client = $reponse->fetch()) {
    $clients = new Client();
    $clients->setName($client['name']);
    $clients->setFirstname($client['firstName']);
    $clients->setAddress($client['address']);
    $clients->setCP($client['CP']);
    $clients->setCity($client['city']);
    $listeClients->addClients($clients);
}

displayListeClients($listeClients);

footer();
