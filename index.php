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
require_once __DIR__ . "/classes/products/Toy.php";

require_once __DIR__ . "/classes/users/User.php";
require_once __DIR__ . "/classes/users/Regular.php";

//Alcune istanze
$dentastix = new Food ("Dentastix", 19.99, "1234567890", "dogs", "Lorem", "2022-10-10");
$laser = new Toy ("Laser", 10.00, "111111111", "cats");

$ciccio = new Regular ("Ciccio", "Pasticcio", "CP@gmail.it", 50, "2021-01-01");
$gino = new User ("Gino", "Pippo", "gp@gmail.it");
$gino->setGender("NB");


function calculateDiscount($price, $discount){
    $resoult = round($price * ($discount/100));
    return $resoult;
}

// var_dump(calculateDiscount());
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
    <h2>I gatti inseguono i <?php echo $laser->getName() ?> perché sono sciocchi</h2>
    
    <h3>Mai fidarsi dei brutti ceffi su internet che sanno che la tua carta scade il: <?php echo $ciccio->getCardDate() ?></h3>

    <br>

    <h4>Stampo tutto <?php echo $gino->getName() ?> <?php echo $gino->getSurname() ?> </h4>
    <ul>
        <li>
            <?php echo $gino->getName() ?>
            <?php echo $gino->getSurname() ?>
             email: 
            <?php echo $gino->getEmail() ?>
        </li>
        <li>
            <?php echo $gino->getName() ?>
            <?php echo $gino->getSurname() ?>
             gender: 
            <?php echo $gino->getGender() ?>
        </li>
    </ul>

    <br>

    <h4>
        <?php echo $ciccio->getName() ?>
         <?php echo $ciccio->getSurname() ?>
        paga i 
        <?php echo $dentastix->getName() ?>
        solo:
        <?php echo calculateDiscount($dentastix->getPrice(), $ciccio->getDiscount()) ?>
        €
    </h4>

</body>
</html>