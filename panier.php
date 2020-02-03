<?php
include("function_2.php");
menu();
$articles = [
    'article1' => [
        'name' => 'Basket blanche',
        'picture' => 'upload/basket1.jpg',
        'price' => 50
    ],
    'article2' => [
        'name' => 'Chaussure de travail',
        'picture' => 'upload/basket2.jpg',
        'price' => 40
    ],
    'article3' => [
        'name' => 'Basket multicouleur',
        'picture' => 'upload/basket3.jpg',
        'price' => 10
    ],
];
$sum = 0;
foreach ($_POST as $key => $article) {
    $article_panier = $articles[$key];

    articlePanier($article_panier['name'], $article_panier['picture'], $article_panier['price']);
    $sum = totalPanier($sum, $article_panier['price']);

    //  $sum = $sum + $article_panier['price'];

}
echo '<b> le total du panier de Khadijah est de </b>' . $sum . ' euros';


//Total panier


