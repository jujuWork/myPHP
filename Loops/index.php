<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    
    <?php

    // FOR LOOP

    /*
    for ($i = 0; $i <= 10; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }
    */

    // WHILE LOOP
    /*
    $test = 0;
    while ($test < 10) {
        echo $test;
        $test++;
    }
    */

    // DO WHILE
    /*
    $test = 1;
    do {
        echo $test;
        $test++;
    } while ($test < 10);
    */

    //FOR EACH
    $fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    foreach ($fruits as $fruit => $color) {
        echo "This is a " . $fruit . ", that has a color of " . $color . "<br>";
    }

    ?>

</body>
</html>