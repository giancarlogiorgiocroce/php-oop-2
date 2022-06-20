<?php
require_once "C:\MAMP\htdocs\boolean-ex\php-oop-2\classes\users\User.php";
require_once "C:\MAMP\htdocs\boolean-ex\php-oop-2\classes\users\Regular.php";

$array_utenti = [];

$ciccio = new Regular ("Ciccio", "Pasticcio", "CP@gmail.it", "2021-01-01", 50);
$array_utenti[] = $ciccio;

$gino = new User ("Gino", "Pippo", "gp@gmail.it", "2027-01-01");
$gino->setGender("NB");
$array_utenti[] = $gino;

?>