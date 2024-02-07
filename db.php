<?php

    // REQUIRE
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");

    // CATEGORIES
    $cat_dog = new Category(1, 'dog', 'https://d1nhio0ox7pgb.cloudfront.net/_img/o_collection_png/green_dark_grey/256x256/plain/dog.png');
    $cat_cat = new Category(2, 'cat', 'https://toppng.com/uploads/preview/free-download-cat-png-vector-icon-cat-transparent-background-cat-icon-transparent-background-11563035549ypnlilorb5.png');
    
    // PRODUCTS
    $prod_croccantini = new Food(1, 'Croccantini', 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=637852830908370000', '35€', $cat_dog, '10/05/2024');

    $prod_cuccia = new AnimalHouse(2, 'Cuccia per cani', 'https://m.media-amazon.com/images/I/81mTYtNJ0dL.jpg', '100€', $cat_dog, '100x45x40');

    $prods = [$prod_croccantini, $prod_cuccia];
?>