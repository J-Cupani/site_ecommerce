<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


include("function_PBO.php");
$selec = false;
session_start();
menu();

?>

<!--Contenus-->
<form method="post" action="panier_PBO.php.php">
    <?php
    affichProduct($bdd);
    var_dump($tes);
    ?>

    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-2">
            <button type="submit" class="btn btn-primary">Commandé</button>
        </div>
    </div>

</form>

</div>
</body>
</html>
