<?php 
use OOP\Vehicle;
use OOP\Bike;
use OOP\Car;
use OOP\Bicycle;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP demo</title>
    </head>
    <body>
        <?php 
        $car = new Vehicle('BMW', '850i');
        $car->setPrice('15000$');

        // var_dump($car->getInfo());

        $bike = new Bike('Kawasaki', 'Bambasaki');      
        $mitsubishi = new Car('Mitsubishi', 'Eclipse');
        $dviratukas = new Bicycle('Firma', 'Viena');
        echo $bike .' '. $mitsubishi .' '. $dviratukas . ' ' . $car;

        ?>
    </body>
</html>