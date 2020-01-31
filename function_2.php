<?php

function menu(){
?>
<!DOCTYPE html>
<html lang="fr" class="full-height">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css "
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus ab nulla dolorum autem nisi officiis
            blanditiis voluptatem hic, assumenda aspernatur facere ipsam nemo ratione cumque magnam enim fugiat
            reprehenderit expedita.</p>
    </div>
</section>
<?php };

function article($name, $picture, $price)
{
    $descr = "Ceci est une description de mon produit"; ?>

    <div class="media">
        <img src="<?php echo $picture ?>" class="align-self-center mr-5 col-2" alt="photo produit">
        <div class="align-self-center col-8">
            <h5 class="mt-0"><?php echo $name ?></h5>
            <p><?php echo $descr ?></p>
        </div>
        <div class="align-self-center col-2">
            <p><?php echo $price ?></p>
        </div>
    </div>


<?php }

function form(){ ?>
<form action="addArticle.php" method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputArticle">L'article</label>
            <input type="text" class="form-control" id="inputArticle" name="product" placeholder="Nom du produit">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPrice">Le prix</label>
            <input type="text" class="form-control" id="inputArticle" name="price" placeholder="Prix du produit">
        </div>
    </div>

    <div class="form-row mb-5">
        <div class="form-group col-md-4">
            <label for="inputImage">Choisir votre Image</label>
            <input type="file" class="form-control-file" id="inputImage" name="picture" placeholder="blabl">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Envoyé</button>
</form>
<?php } ?>
