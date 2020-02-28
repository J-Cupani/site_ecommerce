<?php

include("function_2.php");
session_start();
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



foreach ($_POST['articles'] as $key => $article) {
    echo '<form method="post" action="panier.php">';
    articlePanier($articles[$key]['name'], $articles[$key]['picture'], $articles[$key]['price'], $key);
    if (isset($_POST['quantity'][$key])){
        $sum = totalPanier($articles[$key]['price'], $_POST['quantity'][$key]);
}}

?>
    <div class="row justify-content-center mt-5">

        <div class="align-self-center ">

            <button type="submit" class="btn btn-primary">Actualiser</button>
        </div>
    </div>
    </form>
<?php

echo '<b> Le total du panier est de </b>' . $sum . ' euros';




