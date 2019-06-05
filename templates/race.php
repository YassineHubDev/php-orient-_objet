<?php
require dirname(__DIR__, 1) . '/autoload.php';

//Création d'un véhicule
$vehicle = new Vehicle("renault", 'Essence', 4);
$vehicle->move(15);
$vehicle->move(17);

var_dump($vehicle);



//Création d'un autre véhicule
$vehicle2 = new Vehicle("Dacia", 'Diesel', 4);
$vehicle2->move(100);
$vehicle2->move(4);

var_dump($vehicle2);



//création d'un avion
$airbusA380 = new Plane ('Airbus', 'Kerosene', 22);
$airbusA380->setMaxAlt(20000);
$airbusA380->move(2000);

echo $airbusA380->getWheels();
var_dump($airbusA380);


//création d'un bateau
$bateau = new Boat (
    'vedette',
    'Essence',
    ['Cannes', 'Nice', 'Marseille']);

var_dump($bateau);