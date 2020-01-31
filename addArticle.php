<?php
include("function_2.php");

//controler le formulaire
$error = true;
$picture = '';
$article = [
    ['name' => 'article1', 'picture' => 'img/basket1.jpg', 'price' => 50],
    ['name' => 'article2', 'picture' => 'img/basket2.jpg', 'price' => 20],
    ['name' => 'article3', 'picture' => 'img/basket3.jpg', 'price' => 10],
];


if (isset($_POST['product'])) {

    if (empty($_POST['product'])) {
        $error = true;
        echo '<font color="red">Attention, veuillez remplir tous les champs!</font>';
    }
    if (empty($_POST['price'])) {
        $error = true;
        echo '<font color="red">Attention, veuillez remplir tous les champs!</font>';
    }
    if (empty($picture)) {
        $error = true;
        echo '<font color="red">Attention, veuillez remplir tous les champs!</font>';
    }


    if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['picture']['size'] <= 8000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['picture']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['picture']['tmp_name'], 'upload/' . basename($_FILES['picture']['name']));
                echo "L'envoi a bien été effectué !";
                $picture = 'upload/' . basename($_FILES['picture']['name']);
            }
        }
    }
}
?>



<?php
menu();
?>


<!--Contenus-->
<div class="container">
    <?php
    if ($error == true) {
        form();
    } else {
        $picture = $_POST['picture'];
        var_dump($picture);
        article($_POST['product'], $picture, $_POST['price']);
    } ?>

</div>
</body>
</html>