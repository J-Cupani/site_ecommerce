<?php

function database()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

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
                        <a class="nav-link" href="catalogue_Objet.php">Catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="panier_Objet.php">Panier</a>
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
    <?php
}

function footer()
{
    ?>
    </div>
    </body>
    </html>
    <?php
}

function displayArticle($article)
{
    ?>
    <div class="media mb-3">
        <img src="<?= $article->getPicture() ?>" class="align-self-center mr-5 col-2" alt="photo produit">
        <div class="align-self-center col-6">
            <h5 class="mt-0"><?= $article->getName() ?></h5>
            <h6 class="mt-0">
                <?php
                if ($article->getTaille() != null) {
                    echo 'Taille' . ' ' . $article->getTaille();
                } elseif ($article->getPointure() != null) {
                    echo 'Pointure' . ' ' . $article->getPointure();
                }
                ?></h6>
            <p><?= $article->getDescription() ?></p>
        </div>
        <div class="align-self-center col-2">
            <p><?= $article->getPrice() ?> €</br></p>
        </div>
        <div class="form-check align-self-center col-2">
            <input type="checkbox" name="article[]" value="<?= $article->getidProduct() ?>" class="form-check-input"
            >
            <label class="form-check-label">Selectionner</label>
        </div>
    </div>
    <?php
}

function displayCat($catalogue)
{
    ?>
    <form method="post" action="panier_Objet.php">
        <?php
        foreach ($catalogue->getCatalogue() as $article) {
            displayArticle($article);
        }
        ?>
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Commandé</button>
            </div>
        </div>
    </form>
    <?php
}

function displayClient(Client $client)
{
    ?>
    <div class="card col-3 ml-4 mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $client->getName() . ' ' . $client->getFirstname() ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $client->getCity() . ' ' . $client->getCP() ?></h6>
            <p class="card-text"><?= $client->getAddress() ?></p>
        </div>
    </div>
    <?php
}

function displayListeClients($listeClients)
{
    ?>

    <div class="row">
        <?php
        foreach ($listeClients->getlisteClients() as $client) {
            displayClient($client);
        }
        ?>

    </div>
    <?php
}

function displayPanier($articles, $bdd)
{
    $sum = 0;
    $tab_tmp = [];
    ?>
    <form method="post" action="panier_Objet.php">
        <div class=" row media mb-3">
            <?php
            foreach ($articles->getPanier() as $key => $article) {
                $tab_tmp[$key]['quantity'] = $article;
                $reponse = $bdd->query('Select idProduct, productName, description, price, image FROM product WHERE idProduct=' . intval($key));
                $donnees = $reponse->fetch(); ?>


                <img src="<?php echo $donnees['image'] ?>" class="align-self-center mr-5 col-2" alt="photo produit">
                <div class="align-self-center col-6">
                    <h5 class="mt-0"><?php echo $donnees['productName'] ?></h5>
                    <p><?php echo $donnees['description'] ?></p>
                </div>
                <div class="align-self-center col-1">
                    <p><?php echo $donnees['price'];
                        $tab_tmp[$key]['price'] = $donnees['price']; ?> €</br></p>
                </div>
                <div class="align-self-center  col-1 ">
                    <input type="hidden" name="article[<?= $donnees['idProduct'] ?>]" class="form-check-input" id="key"
                           value="<?= $donnees['idProduct'] ?>">
                    <label for="inputQuantity">Quantité </label>
                    <input type="Number" placeholder="1" class="form-control" id="inputQuantity"
                           name="quantity[<?php echo $donnees['idProduct'] ?>]" value="<?= $article ?>">
                </div>
                <div class="col-1 align-self-center">
                    <button type="submit" name="<?= $key ?>" class="btn btn-primary">Supprimer</button>
                </div>
                <?php $sum = $sum + totalPanier($tab_tmp[$key]['price'], $tab_tmp[$key]['quantity']);
            }
            echo '<b></br> Le total du panier est de ' . $sum . ' euros'; ?> </b>

            <div class="container">
                <div class="row justify-content-between mt-5">
                    <div class="col-4 ">
                        <button type="submit" class="btn btn-primary">Actualiser</button>
                    </div>
                </div>
            </div>
    </form>
    <?php
}


function totalPanier($price, $quantity)
{

    $sum = intval($price) * intval($quantity);
    return $sum;
}

//$sum = $sum + intval($tab_tmp[$key]['quantity']) * intval($tab_tmp[$key]['price']);