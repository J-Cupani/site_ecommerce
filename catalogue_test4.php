<?php
include("function_2.php");


menu();

?>

<!--Contenus-->
<div class="container">

    <?php
    $articles = [
        ['name' => 'article1', 'picture' => 'img/basket1.jpg', 'price' => 50],
        ['name' => 'article2', 'picture' => 'img/basket2.jpg', 'price' => 20],
        ['name' => 'article3', 'picture' => 'img/basket3.jpg', 'price' => 10],
    ];

    foreach ($articles as $article) {
        article($article['name'], $article['picture'], $article['price']);
    }
    ?>


</div>
</body>
</html>