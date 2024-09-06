<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>

    <?php
        require_once '/Users/bb8juju/Documents/GitHub/myPHP/Classes/car.php';

        $car01 = new Car("Honda", "red");
        echo $car01->setBrand("Toyota");
        echo $car01->getBrand();
    ?>
    
</body>
</html>