<?php

require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';



// $truck1 = new Truck(250, 'red', 2, 'diesel');
// echo $truck1->setLoading(310);
// var_dump($truck1);


// $truck2 = new Truck (300, 'green', 4, 'electric');
// echo $truck2->forward();

$bc = new Car('black', 5, 'diesel');

echo '<h4>Test capture erreur sans le frein à main et sans capture d\'erreur :</h4>';
var_dump($bc);
echo $bc->start();

echo '<h4>Test capture erreur avec le frein à main :</h4>';
$bc->setParkBrake(true);
var_dump($bc);

try {
    echo $bc->start() . PHP_EOL;
} catch (NotificationStartCar $sc) {
   // Envoyez  une alerte
   // pour prévenir que le frein à main est actif ;)
   echo 'Exception received  : ' . $e->getMessage() . PHP_EOL;
    $bc->setParkBrake(false);
    var_dump($bc);
} finally {
   // finally permet d'exécuter du code quoi qu'il arrive :)
   echo "Ma voiture roule comme un donut !" . PHP_EOL;
   }
