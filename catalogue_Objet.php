<?php
include("function_Objet.php");
include("class_Objet.php");
session_start();

database();

menu();

$catalogue = new Catalogue();

$reponse = $bdd->query('SELECT product.idProduct, idChaussure, idVetement, Taille, pointure, productName, description, price, image
FROM product
LEFT OUTER JOIN chaussure ON product.idProduct = chaussure.idProduct
LEFT OUTER JOIN vetement ON product.idProduct = vetement.idProduct');
while ($article = $reponse->fetch()) {

    if ($article['Taille'] != null) {
        $articles = new Vetement($article['idVetement'], $article['productName'], $article['price'], $article['description'], $article['image'], $article['Taille']);
    } elseif ($article['pointure'] != null) {
        $articles = new Chaussure($article['idChaussure'], $article['productName'], $article['price'], $article['description'], $article['image'], $article['pointure']);
    } else {
        $articles = new Article($article['idProduct'], $article['productName'], $article['price'], $article['description'], $article['image']);
    }
    $catalogue->addArticles($articles);
}

displayCat($catalogue);
footer();
