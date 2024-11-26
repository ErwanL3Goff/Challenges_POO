<?php

require_once 'Truck.php';

//INSTANCE

$truck1 = new Truck('Bleu', '2', 'hybride', '10');
$truck2 = new Truck('Rouge', '4', 'electrique','15');


//TESTE DES METHODES

echo $truck1->start() . PHP_EOL;
echo $truck1->move() . PHP_EOL;
echo "Truck 1 current load: " . $truck1->getCurrentLoad() . " tons" . PHP_EOL;

$truck1->setCurrentLoad(5);
echo "Truck 1 current load: " . $truck1->getCurrentLoad() . " tons" . PHP_EOL;
echo "Truck 1 is " . $truck1->isFull() . PHP_EOL;

$truck1->setCurrentLoad(10);
echo "Truck 1 current load: " . $truck1->getCurrentLoad() . " tons" . PHP_EOL;
echo "Truck 1 is " . $truck1->isFull() . PHP_EOL;

echo $truck1->brake() . PHP_EOL;


echo $truck2->start() . PHP_EOL;
echo $truck2->move() . PHP_EOL;
$truck2->setCurrentLoad(12);