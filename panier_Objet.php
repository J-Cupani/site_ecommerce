<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

include("function_PBO.php");
session_start();
menu();
echo '<form method="post" action="panier_PBO.php">';
if (isset($_POST['quantity'])) {
    $_SESSION['quantity'] = $_POST['quantity'];
}

$tests = articlePanier($bdd);
$sum = 0;

foreach ($tests as $key => $test) {
    $price = $test['price'];
    $sum = $sum + intval($price) * intval($test['quantity']);
}

$_SESSION['sum'] = $sum;

echo '<b></br> Le total du panier est de ' . $sum . ' euros'; ?> </b>

<div class="container">
    <div class="row justify-content-between mt-5">
        <div class="col-4 ">
            <button type="submit" class="btn btn-primary">Actualiser</button>
        </div>
        </form>

        <form method="post" action="command_PBO.php">
             <div class="col-4">
             <button type="submit" name="sendCommand" class="btn btn-primary">Commander</button>
             </div>
        </form>
    </div>
</div>





