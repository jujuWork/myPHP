<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built_In</title>
</head>
<body>
    
    <?php

    /*

    ($string = "Hello World!";

    echo strlen($string);
    echo strpos($string, "o");
    echo str_replace("World!", "Joharry", $string);
    echo substr($string, 2, -2);
    print_r(explode(" ", $string));
    
    

    // MATH

    $number = -5.5;

    echo abs($number);
    echo round($number);
    echo pow(2, 3);
    echo sqrt(16);
    echo rand(1, 100);

    

    // ARRAY

    $array = ["apple", "banana", "cherry"];

    echo count($array);
    echo is_array($array);

    array_push($array, "Kiwi");
    print_r($array);

    array_pop($array);
    print_r($array);

    */

    // DATE

    echo date("Y-m-d H:i:s");
    echo time();

    $date = "2024-08-07 12:00:00";
    echo strtotime($date);

    ?>

</body>
</html>