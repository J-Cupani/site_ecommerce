<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=catalogue;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

class Article
{
    private $_name;
    private $_description;
    private $_price;
    private $_picture;
    private $_weight;
    private $_stock;
    private $_avaibility;

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        }
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        if (is_string($description)) {
            $this->_description = $description;
        }
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function setPrice($price)
    {
        $price = (int)$price;
        if ($price > 0) {
            $this->_price = $price;
        }
    }

    public function getPicture()
    {
        return $this->_picture;
    }

    public function setPicture($picture)
    {
        if (is_string($picture)) {
            $this->_picture = $picture;
        }
    }

    public function getWeight()
    {
        return $this->_weight;
    }

    public function setWeight($weight)
    {
        $weight = (int)$weight;
        if ($weight > 0) {
            $this->_weight = $weight;
        }
    }

    public function getStock()
    {
        return $this->_stock;
    }

    public function setStock($stock)
    {
        $stock = (int)$stock;
        if ($stock > 0) {
            $this->_stock = $stock;
        }
    }

    public function getAvaibility()
    {
        return $this->_avaibility;
    }

    public function setAvaibility($avaibility)
    {
        $this->_avaibility = $avaibility;
    }

    public function getPointure()
    {
        return null;
    }


    public function getTaille()
    {
        return null;
    }

    public function __construct($name, $price, $description, $picture)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setPicture($picture);
    }

}

class Vetement extends Article
{
    private $_taille;

    public function getTaille()
    {
        return $this->_taille;
    }

    public function setTaille($taille)
    {
        if (is_string($taille)) {
            $this->_taille = $taille;
        }
    }

    public function __construct($name, $price, $description, $picture, $taille)
    {
        parent::__construct($name, $price, $description, $picture);
        $this->setTaille($taille);
    }
}

class Chaussure extends Article
{
    private $_pointure;

    public function getPointure()
    {
        return $this->_pointure;
    }

    public function setPointure($pointure)
    {
        $pointure = (int)$pointure;
        if ($pointure > 0 && $pointure < 54) {
            $this->_pointure = $pointure;
        }
    }
    public function __construct($name, $price, $description, $picture, $pointure)
    {
        parent::__construct($name, $price, $description, $picture);
        $this->setPointure($pointure);
    }

}

class Catalogue
{
    private $_catalogue = [];

    public function getCatalogue()
    {
        return $this->_catalogue;
    }

    public function setCatalogue($catalogue)
    {
        $this->_catalogue = $catalogue;
    }

    public function addArticles($articles)
    {
        $this->_catalogue[] = $articles;
    }

}

class Client
{
    private $_name;
    private $_firstName;
    private $_address;
    private $_CP;
    private $_city;

    public function getName()
    {
        return $this->_name;
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        }
    }

    public function getFirstname()
    {
        return $this->_firstName;
    }

    public function setFirstname($firstname)
    {
        if (is_string($firstname)) {
            $this->_firstName = $firstname;
        }
    }

    public function getAddress()
    {
        return $this->_address;
    }

    public function setAddress($address)
    {
        if (is_string($address)) {
            $this->_address = $address;
        }
    }

    public function getCP()
    {
        return $this->_CP;
    }

    public function setCP($CP)
    {
        $CP = (int)$CP;
        if ($CP > 9999 && $CP < 100000) {
            $this->_CP = $CP;
        }
    }

    public function getCity()
    {
        return $this->_city;
    }

    public function setCity($city)
    {
        if (is_string($city)) {
            $this->_city = $city;
        }
    }
}

class ListeClients
{
    private $_listeCLients = [];

    public function getlisteClients()
    {
        return $this->_listeCLients;
    }

    public function setListeClients($listeClients)
    {
        $this->_listeClients = $listeClients;
    }

    public function addClients($clients)
    {
        $this->_listeCLients[] = $clients;
    }
}