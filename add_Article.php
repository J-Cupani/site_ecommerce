<?php
include("function_2.php");
$product = "";
$price = "";
$picture = "";
$errproduct = "";
$errprice = "";
$errpicture = "";
$error = true;

if (isset($_POST["product"])) {
    $error = false;
    $product = $_POST["product"];
    $price = $_POST["price"];
    $picture = $_FILES["picture"];
    if (empty($product)) {
        $errproduct = 'Le nom du produit est obligatoire<br/>';
        $error = true;
    }
    if (empty($price)) {
        $errprice = "Le prix est obligatoire<br/>";
        $error = true;
    }
    if (empty($picture)) {
        $errpicture = "La photo est obligatoire<br/>";
        $error = true;
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

menu();

if ($error == true) { ?>
    <form action="addarticle_test_4.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputArticle">L'article</label>
                <input type="text" class="form-control" id="inputArticle" name="product" placeholder="Nom du produit"
                       value="<?= $product ?>"/><?= $errproduct ?><br/>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPrice">Le prix</label>
                <input type="text" class="form-control" id="inputArticle" name="price" placeholder="Prix du produit"
                       value="<?= $price ?>"/><?= $errprice ?><br/>
            </div>
        </div>

        <div class="form-row mb-5">
            <div class="form-group col-md-4">
                <label for="inputImage">Choisir votre Image</label>
                <input type="file" class="form-control-file" id="inputImage" name="picture"
                       placeholder="Photo du Produit" value=<?= $errprice ?><br/>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Envoyé</button>
    </form>
    <?php
}

if ($error == false) {
    article($product, $picture, $price);
} ?>
</body>
</html>