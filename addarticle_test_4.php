<?php
include("function_2.php");

menu();

?>

<!--Contenus-->

    <?php
    $nom="";
    $prenom="";
    $ville="";
    $errnom="";
    $errprenom="";
    $errville="";
    $error = true;
    if (isset($_POST["nom"]))
    {
        $error = false;
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $ville=$_POST["ville"];
        if (empty($nom)){
            $errnom = "Le nom est obligatoire<br/>";
            $error = true;
        }
        if (empty($prenom)){
            $errprenom = "Le prenom est obligatoire<br/>";
            $error = true;
        }
        if (empty($ville)){
            $errville = "La ville est obligatoire<br/>";
            $error = true;
        }
    }
    ?>

    <?php
    if ($error==true) { ?>
        <form action="addarticle_test_4.php" method="post">
            nom : <input type="text" name="nom" value="<?=$nom?>"/><?= $errnom?><br/>
            prenom : <input type="text" name="prenom" value="<?=$prenom?>"/><?= $errprenom?><br/>
            ville : <input type="text" name="ville" value="<?=$ville?>"/><?= $errville?><br/>
            <input type="submit" value="Envoyer"/>
        </form>
        <?php
    }
    else
        echo ("Bonjour " . $prenom . " " . $nom);
    ?>
    </body>
</html>