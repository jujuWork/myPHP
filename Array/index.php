<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
    <?php
        $fruits = [
            "Apple", // 0
            "Banana", // 1
            "Cherry" // 2
        ];

        $fruits [] = "Orange";
        echo $fruits[2];

        $tasks = [
            "trash" => "Joharry",
            "laundry" => "Rina",
            "play" => "Grey"
        ];

        echo $tasks["play"];

        array_splice($fruits, 2, 0, $tasks);
        print_r($fruits);
    ?>

</body>
</html>