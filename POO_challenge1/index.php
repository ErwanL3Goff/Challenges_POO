<?php

require_once 'Car.php';

$car1 = new Car('rouge', 4, 'electrique');
$car2 = new Car("verte", 5, 'sansPlomb95');
$car3 = new Car('rose', 8, 'Hybride');

echo $car1->start() . PHP_EOL;
echo $car1->foward() . PHP_EOL;
echo $car1->brake() . PHP_EOL;

echo "Voiture banilisée colorée en " . $car1->getColor() . PHP_EOL;
echo "Pour une conduite discrète elle roule à l'" . $car1->getEnergy() . PHP_EOL;

echo $car2->foward() . PHP_EOL;
echo $car2->brake() . PHP_EOL;
echo $car2->foward() . PHP_EOL;

echo "La voiture du suspect est la " . $car2->getColor() . PHP_EOL;
echo "Le carburant de son véhicul n'est autre que du " . $car2->getEnergy() . PHP_EOL;

echo "Rien  à voir mais c'est pour l'exercice, \nla voiture " . $car3->getColor() . " a " . $car3->getNbSeats() . " places" . PHP_EOL;