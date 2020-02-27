<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

session_start();
include("function_Objet.php");
include("class_Objet.php");
menu();

$catalogue = new Catalogue();

$reponse = $bdd->query('SELECT idChaussure, idVetement, Taille, pointure, productName, description, price, image
FROM product
LEFT OUTER JOIN chaussure ON product.idProduct = chaussure.idProduct
LEFT OUTER JOIN vetement ON product.idProduct = vetement.idProduct');
while ($article = $reponse->fetch()) {

    if ($article['Taille'] != null) {
        $articles = new Vetement($article['productName'], $article['price'], $article['description'], $article['image'], $article['Taille']);
    } elseif ($article['pointure'] != null) {
        $articles = new Chaussure($article['productName'], $article['price'], $article['description'], $article['image'], $article['pointure']);
    } else {
        $articles = new Article($article['productName'], $article['price'], $article['description'], $article['image']);
    }
    $catalogue->addArticles($articles);
}


displayCat($catalogue);

footer();
