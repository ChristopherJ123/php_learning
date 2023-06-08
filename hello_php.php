<?php
$name = "toto is kool";
$food = "mie pangsit";
$email = "toto@gmail.com";

$age = 18; //int
$price = 2.99; //float
$bol = true; //boolean

$buy_count = 3;

echo $name;
echo "<br>{$name}'s favorite food is {$food}.<br>";
echo "My age is {$age}<br>";
echo "The price of each is \${$price}";
$total_price = $price * $buy_count;
echo "You have bought \${$total_price}";
