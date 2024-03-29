<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcaBoolean</title>
    <?php 
    
        require_once(__DIR__ . "/db.php");
        echo "<br>Price: " . $test_prod -> getPrice();
        echo "<br>Full Price: " . $test_prod -> getFullPrice() . "€";

        try {

            $test_prod = new Product(1, 'Croccantini', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000', '35€', 20, $cat_dog, '10/05/2024');
        } catch (Exception $e) {

            echo "Impossivile creare prodotto di test: " . $e -> getMessage();
        }
    
    ?>
    <style>
        h1, h2 {
            text-align: center;
        }

        h3 {
            font-size: 25px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 230px;         
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>ARCA-BOOLEAN</h1>
    <h2>Prodotti per animali</h2>
<?php

    foreach ($prods as $prod) {
        echo "<h3>{$prod -> getTypology()}</h3>";  
        echo "<div class='card'>";
        echo "<img src='{$prod -> getImage()}' width='200'>";
        echo "<h2>{$prod -> getTitle()}</h2>";
        echo "<p>Prezzo: {$prod -> getPrice()}</p>";
        echo "<p>Category: 
        <img src='{$prod -> getCategory() -> getIcon()}' width='30'> 
        {$prod -> getCategory() -> getName()}</p>";
        echo "</div>"; 
    }
?>

        <!-- // class Products {

        //     public $name;
        //     public $price;

        //     public function __construct($name, $price) {

        //         $this -> name = $name;
        //         $this -> price = $price;
        //     }

        //     // Metodo per ottenere il tipo di prodotto
        //     public function getTypeProduct() {
        //         return "Random";
        //     }
        // }

        // // Definizione della classe DogProduct che estende Products
        // class DogProduct extends Products {

        //     public function getTypeProduct() {
        //         return "Dog";
        //     }
        // }

        // // Definizione della classe CatProduct che estende Products
        // class CatProduct extends Products {

        //     public function getTypeProduct() {
        //         return "Cat";
        //     }
        // }


        // // Creazione di alcuni prodotti per cani e gatti
        // $products = [
        //     new DogProduct("Cuccia per cani", "50€"),
        //     new CatProduct("Palline da gioco per gatti", "5€"),
        //     new CatProduct("Crocchette per gatti", "10€"),
        //     new DogProduct("Osso da masticare per cani", "8€"),
        // ]; -->
</body>
</html>