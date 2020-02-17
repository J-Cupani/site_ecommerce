<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



include("function_2.php");
$selec=false;
session_start();
menu();

?>

<!--Contenus-->
<form method="post" action="panier.php">
    <?php
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

    foreach ($articles as $key => $article) {
        article($article['name'], $article['picture'], $article['price'], $key);
    }

    ?>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-2">
            <button type="submit" class="btn btn-primary">Envoyé</button>
        </div>
    </div>

</form>

</div>
</body>
</html>
