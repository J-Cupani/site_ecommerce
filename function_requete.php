<?php

function menu()
{
    ?>
    <!DOCTYPE html>
    <html lang="fr" class="full-height">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css "
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous"
              id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/66de9ed915.js" crossorigin="anonymous"></script>
        <title>Article</title>
    </head>

    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Les chaussures de Jo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="font-weight-light">Vertically Centered Masthead Content</h1>
                    <p class="lead">A great starter layout for a landing page</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h2 class="font-weight-light">Mes Shoes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi
                officiis
                blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat
                reprehenderit expedita.</p>
        </div>
    </section>
    <div class="container">
<?php }

function connect()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}

function affichProduct($bdd)
{
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom du produit</th>
            <th scope="col">Poids</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $reponse = $bdd->query('Select * FROM product');
        while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <th scope="row"><?= $donnees['idProduct'] ?></th>
                <td><?= $donnees['productName'] ?></td>
                <td><?= $donnees['weight'] / 1000 . ' Kg' ?></td>
                <td><?= $donnees['stock'] ?></td>
                <td><?= $donnees['price'] . ' €' ?></td>
            </tr>
        <?Php }
        $reponse->closeCursor(); ?>
        </tbody>
    </table>
<?php }

function stockEmpty($bdd)
{
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom du produit</th>
            <th scope="col">Poids</th>
            <th scope="col">Quantité</th>
            <th scope="col">Prix</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $reponse = $bdd->query('Select * FROM product WHERE stock=0');
        while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <th scope="row"><?= $donnees['idProduct'] ?></th>
                <td><?= $donnees['productName'] ?></td>
                <td><?= $donnees['weight'] / 1000 . ' Kg' ?></td>
                <td><?= $donnees['stock'] ?></td>
                <td><?= $donnees['price'] . ' €' ?></td>
            </tr>
        <?Php }
        $reponse->closeCursor(); ?>
        </tbody>
    </table>
<?php }

function priceTotalCommand($bdd)
{
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">N° Commande</th>
            <th scope="col">Prix Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $reponse = $bdd->query('SELECT id_order, SUM(price*quantity) as Total
FROM product
INNER JOIN orderproduct ON product.idProduct = orderproduct.idProduct
GROUP By id_order');
        while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <th scope="row">Commande <?=$donnees['id_order'] ?></th>
                <td><?= $donnees['Total'] . ' €'?></td>
            </tr>
        <?Php }
        $reponse->closeCursor(); ?>
        </tbody>
    </table>
<?php }

function charlizeCommand($bdd)
{
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Commande de Charlize</th>
            <th scope="col">Date</th>
            <th scope="col">Prix Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $reponse = $bdd->query('SELECT orders.*
FROM orders
INNER JOIN client ON orders.idClient = client.idClient
where firstName = \'charlize\'');
        while ($donnees = $reponse->fetch()) { ?>
            <tr>
                <th scope="row">Commande <?=$donnees['idOrder'] ?></th>
                <td><?= $donnees['date'] . ' €'?></td>
                <td><?= $donnees['totalAmount'] . ' €'?></td>
            </tr>
        <?Php }
        $reponse->closeCursor(); ?>
        </tbody>
    </table>
<?php }

function addproduct($bdd){
$productName='producttest';
$description='blababa';
$price=150;
$image='test.jpg';
$stock=10;
$avaibility=1;
$weight=1000;
$idcatogory=2;

///** @var PDOStatement $req */
$req = $bdd->prepare('INSERT INTO product (productName, description, price, image, stock, avaibility, weight, idCategory) 
VALUES (:productName, :description, :price, :image, :stock, :avaibility, :weight, :idCategory)');
$test=$req->execute(array(
	'productName' => $productName,
	'description' => $description,
	'price' => $price,
	'image' => $image,
	'stock' => $stock,
	'avaibility' => $avaibility,
	'weight' => $weight,
	'idCategory' => $idcatogory,
	));
//var_dump($test);
//var_dump($req->errorInfo());
//var_dump($req->debugDumpParams());
echo 'Le produit a bien été ajouté !';
}


