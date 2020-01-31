<?php
include("function_1.php");


menu();

?>

<!--Contenus-->
<div class="container">

    <?php
    $article = [
        ['name' => 'article1', 'picture' => 'img/basket1.jpg', 'price' => 50],
        ['name' => 'article2', 'picture' => 'img/basket2.jpg', 'price' => 20],
        ['name' => 'article3', 'picture' => 'img/basket3.jpg', 'price' => 10],
    ];

    for ($i = 0; $i < count($article); $i = $i + 1) {
        article($article [$i]['name'], $article [$i]['picture'], $article [$i]['price']);
    }
    ?>


</div>
</body>
</html>