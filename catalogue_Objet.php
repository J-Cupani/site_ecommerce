<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();
include("function_Objet.php");
menu();

$catalogue = new Catalogue();

$reponse = $bdd->query('Select idProduct, productName, description, price, image FROM product');
while ($article = $reponse->fetch()) {
    $articles = new Article();
    $articles->setName($article['productName']);
    $articles->setPrice($article['price']);
    $articles->setDescription($article['description']);
    $articles->setPicture($article['image']);
    $catalogue->addArticles($articles);
}

displayCat($catalogue);



footer();
