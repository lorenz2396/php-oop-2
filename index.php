<?php


require_once __DIR__ . "/Classes/Products.php";
require_once __DIR__ . "/Classes/Food.php";
require_once __DIR__ . "/Classes/Bed.php";
require_once __DIR__ . "/Classes/Toys.php";
require_once __DIR__ . "/Classes/Categories.php";

$products = [
    new Food("Expecial Cane Biscotti Premio", "Biscotti integrali per Cuccioli di tutte le taglie Expecial Dog Piccolini, ottima appetibilità ed elevata qualità garantite Made in Italy.", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/240047-1800-1800/expecial-cane-biscotti-premio.jpg?v=1770855353&quality=1&width=1800&height=1800", "Biscotti", "Mix di gusti"),
    new Bed("Cuccia esterna per Cani", "Cuccia per cani da esterno ideato per proteggere il tuo amico a quattro zampe.", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/225623-1800-1800/p-a-y--canile-eco-lodge-large.jpg?v=1770855232&quality=1&width=1800&height=1800", "Esterno", "Casetta"),
    new Toys("Idrante per Cani", "Divertente e coloratissimo gioco per cani nella caratteristica forma di un idrante.", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/279418-1800-1800/camon-gioco-per-cani-idrante-in-tpr.jpg?v=1767887203&quality=1&width=1800&height=1800", "Giocattolo di gomma", "Foam TPR"),
    new Food("Virtus Kitten Native Seas", "Virtus Kitten Native Seas cibo secco per gattini ricco di salmone per la crescita e il corretto sviluppo.", "Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/224343-1800-1800/virtus-native-seas-kitten.jpg?v=1770889891&quality=1&width=1800&height=1800", "Croccantini", "Salmone"),
    new Bed("Cuccia Montana", "Morbida cuccia per gatto perfetta per il riposo del tuo felino di casa. Misure del prodotto: 40X42X31CM.", "Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/277880-1800-1800/zolux-cuccia-montana.jpg?v=1770218445&quality=1&width=1800&height=1800", "Interno", "Cuccia morbida"),
];

$products[0]->setPrice(3.99);
$products[1]->setPrice(70.00);
$products[2]->setPrice(9.99);
$products[3]->setPrice(12.99);
$products[4]->setPrice(44.90);





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