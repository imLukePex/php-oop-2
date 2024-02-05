<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArcaBoolean</title>
    <style>
        h1 {
            text-align: center;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            height: 250px;
            float: left;
        }
    </style>
</head>
<body>
    <?php

        class Products {

            public $name;
            public $price;

            public function __construct($name, $price) {

                $this -> name = $name;
                $this -> price = $price;
            }

            // Metodo per ottenere il tipo di prodotto
            public function getTypeProduct() {
                return "Random";
            }
        }

        // Definizione della classe DogProduct che estende Products
        class DogProduct extends Products {

            public function getTypeProduct() {
                return "Dog";
            }
        }

        // Definizione della classe CatProduct che estende Products
        class CatProduct extends Products {

            public function getTypeProduct() {
                return "Cat";
            }
        }


        // Creazione di alcuni prodotti per cani e gatti
        $products = [
            new DogProduct("Cuccia per cani", "50€"),
            new CatProduct("Palline da gioco per gatti", "5€"),
            new CatProduct("Crocchette per gatti", "10€"),
            new DogProduct("Osso da masticare per cani", "8€"),
        ];
    ?>

    <h1>Prodotti per animali</h1>

    <?php

        // Generazione card per i prodotti
        foreach ($products as $product) {
            echo "<div class='card'>";
            echo "<h2>{$product -> name}</h2>";
            echo "<p>Prezzo: {$product -> price}</p>";
            echo "<p>Tipologia: {$product -> getTypeProduct()}</p>";
            echo "</div>";
        }
    ?>
</body>
</html>