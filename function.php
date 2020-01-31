<?php
function article1(){
    $name = "Article1";
    $price = 10;
    $picture = "img/basket1.jpg";
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
<?php };?>

<?php
function article2(){
    $name = "Article2";
    $price = 25;
    $picture = "img/basket2.jpg";
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
<?php };?>

<?php
function article3(){
    $name = "Article3";
    $price = 45;
    $picture = "img/basket3.jpg";
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
<?php };?>
