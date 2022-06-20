<?php 
/*
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
buon lavoro!
*/

require_once __DIR__ . "/classes/products/Product.php";
require_once __DIR__ . "/classes/products/Food.php";

$dentastix = new Food ("Dentastix", "19,99€", "1234567890", "dogs", "Lorem", "2022-10-10");

// $_name,
// $_price,
// $_barcode,
// $_food_for
// $_food_label
// $_expiration_date

var_dump($dentastix);
?>

<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio - OOP 2</title>
</head>
<body>

    <h1>HW</h1>
    <h2>Buono questo <?php echo $dentastix->getName() ?></h2>
    
</body>
</html>