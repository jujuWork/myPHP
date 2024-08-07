<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define</title>
</head>
<body>
    
    <?php

    function sayHello() 
    {
        return "Hello World!";
    }

    echo sayHello();

    function calculator(int $num01, int $num02)
    {
        $result = $num01 + $num02;
        return $result;
    }

    $test = calculator(100, 3);
    echo $test;

    ?>


</body>
</html>