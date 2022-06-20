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

require_once __DIR__ . "/istanze/lista_prodotti.php";
require_once __DIR__ . "/istanze/lista_utenti.php";


function calculateDiscount($price, $discount){
    $resoult = round($price * ($discount/100));
    return $resoult;
}

// var_dump($array_utenti);
// var_dump($array_prodotti);
?>

<!DOCTYPE html>
<html lang="IT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Esercizio - OOP 2</title>
</head>
<body>

    <div class="container">
        <!-- Riga dei clienti -->
        <div class="row">
            <?php foreach ($array_utenti as $utente => $proprietà): ?>
            <col-2>
                <p>
                    <?php echo $proprietà->getName() ?>
                </p>

                <ul>
                    <li> Cognome: <?php echo $proprietà->getSurname() ?> </li>
                    <li> Email: <?php echo $proprietà->getEmail() ?> </li>
                    <li> Carta: <?php echo $proprietà->getCardDate() ?> </li>
                    <li> Età: <?php echo $proprietà->getAge() ?> </li>
                    <li> Genere: <?php echo $proprietà->getGender() ?> </li>
                    <li> Sconto: <?php echo $proprietà->getDiscount() ?> % </li>
                </ul>

            </col-2>
            <?php endforeach;?>
        </div>

        <!-- Riga dei prodotti -->
        <div class="row">
            <?php foreach ($array_prodotti as $prodotto => $valore): ?>
            <col-2>
                <p>
                    <?php echo $valore->getName() ?>
                </p>

                <ul>
                    <li> Prezzo: <?php echo $valore->getPrice() ?> € </li>
                    <li> Codice: <?php echo $valore->getBarcode() ?> </li>
                </ul>

            </col-2>
            <?php endforeach;?>
        </div>
    </div>

</body>
</html>