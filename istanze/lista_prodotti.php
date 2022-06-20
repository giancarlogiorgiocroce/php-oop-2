<?php
require_once "C:\MAMP\htdocs\boolean-ex\php-oop-2\classes\products\Product.php";
require_once "C:\MAMP\htdocs\boolean-ex\php-oop-2\classes\products\Food.php";
require_once "C:\MAMP\htdocs\boolean-ex\php-oop-2\classes\products\Toy.php";


$array_prodotti = [];

$dentastix = new Food ("Dentastix", 19.99, "1234567890", "dogs", "Lorem", "2022-10-10");
$array_prodotti[] = $dentastix;

$laser = new Toy ("Laser", 10.00, "111111111", "cats");
$array_prodotti[] = $laser;

?>