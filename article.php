
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

<!--Contenus-->
<?php

article() {
$name = "Article1";
$price = 10;
$picture = "img/basket1.jpg";
$descr = "Ceci est une description de mon produit";

   echo '<div class="media">;
   echo    ' <img src=" '.$picture.' " class="align-self-center mr-5 col-2" alt="photo produit">;
   echo    ' <div class="align-self-center col-8">;
     echo    '   <h5 class="mt-0"><$name</h5>;
         echo  ' <p>$descr</p>;

      echo  '</div>;
       echo '<div class="align-self-center col-2">;
       echo  ' <p> $price $ </p>;
       echo '</div>;
    echo '</div>;
}



</main>
</body>

</html>



// UTILISER LA VARIABLE $song pour afficher les données



echo $song['title'] .'<br/>';
echo '<br/>';
foreach ($song['data']['chorus_1'] as $choru) {
    echo 'chorus_1: ' . $choru . '<br/>';
}
echo '<br/>';
foreach ($song['data']['first_verse'] as $first_verse) {
    echo $first_verse . '<br/>';
}
echo '<br/>';
foreach ($song['data']['chorus_2'] as $choru2) {
    echo 'chorus_2: ' .$choru2 . '<br/>';
}
echo '<br/>';
foreach ($song['data']['second_verse'] as $second_verse) {
    echo 'chorus_1: ' .$second_verse . '<br/>';
}


echo '<br/>' . $song['author'];

