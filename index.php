<?php

require_once __DIR__ . "/Classes/Products.php";
require_once __DIR__ . "/Classes/Food.php";
require_once __DIR__ . "/Classes/Bed.php";
require_once __DIR__ . "/Classes/Toys.php";
require_once __DIR__ . "/Classes/Categories.php";
require_once __DIR__ . "/Classes/db.php";





?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OOP-2</title>
        
        <!-- Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    
    <body>
        
        <header class="text-center m-4">
            <h1>PetShop</h1>
        </header>

        <main class="overflow-auto">
            <div class="container p-3">
                <div class="row row-cols-3">
                    <?php foreach ($products as $product) { ?>
                        <div class="col g-4">
                            <div class="card p-3">
                                <img src="<?php echo $product->img; ?>" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <h2 class="card-title"><?php echo $product->name; ?></h2>
                                    <p class="card-text"><?php echo $product->description; ?></p>
                                    <p class="card-text">Prezzo: <?php echo $product->getPrice(); ?> €</p>
                                    <p class="card-text">Tipo: <?php echo $product->type; ?></p>
                                    <p class="card-text">Categoria: <?php echo $product->category; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

</html>