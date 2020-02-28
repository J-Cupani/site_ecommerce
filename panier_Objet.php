<?php
include("function_Objet.php");
include("class_Objet.php");
session_start();

database();

menu();


if (isset($_POST['article'])) {

    $articles = $_POST['article'];
    $panier = new Panier();

    if (isset($_POST['article'])) {
        foreach ($articles as $article) {
            $panier->addArticle($article);
        }
    }

    if (isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $key => $value) {
            $panier->updateArticle($key, $value);
        }
    }

    foreach ($_POST['article'] as $key) {

        if (isset($_POST[$key])) {
            $panier->deleteArticle($key);
        }
    }
    displayPanier($panier, $bdd);
    $_SESSION = $panier;
} else {
    echo 'Votre panier est vide !';
}

footer();


