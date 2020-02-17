<?php
include("function_requete.php");


menu();

$bdd = connect(); ?>
<div class="row mb-5">
    <div class="col-6">
        <?php
        echo '<h2 class="mb-4 mt-4">Liste des produits</h2>';
        affichProduct($bdd); ?>
    </div>
    <div class="col-6">
        <?php
        echo '<h2 class="mb-4 mt-4">Produit en ruptures de stock</h2>';
        stockEmpty($bdd); ?>
    </div>
</div>
<div class="row mb-5 mt-5">
    <div class="col-6">
        <?php
        echo '<h2 class="mb-4 mt-4">Ensemble des commandes</h2>';
        priceTotalCommand($bdd); ?>
    </div>
    <div class="col-6">
        <?php
        echo '<h2 class="mb-4 mt-4">Commandes de Charlize</h2>';
        charlizeCommand($bdd); ?>
    </div>
</div>



