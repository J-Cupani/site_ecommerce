<?php

include("function_1.php");

$recupProduct = $_POST ['product'];
$recupPrice = $_POST ['price'];

If($recupProduct != "" && $recupPrice != "") {
    echo 'enmplir le texte';
};

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0)
{
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['picture']['size'] <= 8000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['picture']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['picture']['tmp_name'], 'upload/' . basename($_FILES['picture']['name']));
            echo "L'envoi a bien été effectué !";

        }
    }
}
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

<?php
menu();
?>

<!--Contenus-->
<div class="container">

<?php
$picture = 'upload/' . basename($_FILES['picture']['name']);
article($_POST['product'],$picture, $_POST['price']);

$recupProduct = $_POST ['product'];
$recupPrice = $_POST ['price'];

If ($recupProduct != "" && $recupPrice != "") {
    echo 'renmplir le texte';
};
?>