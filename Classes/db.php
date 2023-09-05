<?php

require_once __DIR__ . "/Classes/Products.php";
require_once __DIR__ . "/Classes/Food.php";
require_once __DIR__ . "/Classes/Bed.php";
require_once __DIR__ . "/Classes/Toys.php";
require_once __DIR__ . "/Classes/Categories.php";

$products = [
    new Food(
        "Expecial Cane Biscotti Premio",
        "Biscotti integrali per Cuccioli di tutte le taglie Expecial Dog Piccolini, ottima appetibilità ed elevata qualità garantite Made in Italy.",
        "Cani",
        "https://arcaplanet.vtexassets.com/arquivos/ids/240047-1800-1800/expecial-cane-biscotti-premio.jpg?v=1770855353&quality=1&width=1800&height=1800",
        true,
        "20/06/2025"
    ),
    new Bed(
        "Cuccia esterna per Cani",
        "Cuccia per cani da esterno ideato per proteggere il tuo amico a quattro zampe.",
        "Cani",
        "https://arcaplanet.vtexassets.com/arquivos/ids/225623-1800-1800/p-a-y--canile-eco-lodge-large.jpg?v=1770855232&quality=1&width=1800&height=1800",
        false,
        "Cuccia",
        "A0645D"
    ),
    new Toys(
        "Idrante per Cani",
        "Divertente e coloratissimo gioco per cani nella caratteristica forma di un idrante.",
        "Cani",
        "https://arcaplanet.vtexassets.com/arquivos/ids/279418-1800-1800/camon-gioco-per-cani-idrante-in-tpr.jpg?v=1767887203&quality=1&width=1800&height=1800",
        true,
        "Giocattolo di gomma",
        "Foam TPR"
    ),
    new Food(
        "Virtus Kitten Native Seas",
        "Virtus Kitten Native Seas cibo secco per gattini ricco di salmone per la crescita e il corretto sviluppo.",
        "Gatti",
        "https://arcaplanet.vtexassets.com/arquivos/ids/224343-1800-1800/virtus-native-seas-kitten.jpg?v=1770889891&quality=1&width=1800&height=1800", 
        true,
        "27/09/2026"
    ),
    new Bed(
        "Cuccia Montana",
        "Morbida cuccia per gatto perfetta per il riposo del tuo felino di casa. Misure del prodotto: 40X42X31CM.",
        "Gatti",
        "https://arcaplanet.vtexassets.com/arquivos/ids/277880-1800-1800/zolux-cuccia-montana.jpg?v=1770218445&quality=1&width=1800&height=1800",
        true,
        "Interno",
        "Cuccia morbida"),
];

// $products[0]->setPrice(3.99);
// $products[1]->setPrice(70.00);
// $products[2]->setPrice(9.99);
// $products[3]->setPrice(12.99);
// $products[4]->setPrice(44.90);


try {
    $products[0]->setPrice(3.99);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[1]->setPrice(110.00);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[2]->setPrice(0);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[3]->setPrice(12.49);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[4]->setPrice(44.90);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[5]->setPrice(3.60);
} catch (Exception $err) {
    echo $err->getMessage();
}
