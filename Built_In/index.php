<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built_In</title>
</head>
<body>
    
    <?php

    $string = "Hello World!";

    echo strlen($string);
    echo strpos($string, "o");
    echo str_replace("World!", "Joharry", $string);
    echo substr($string, 2, -2);
    print_r(explode(" ", $string));


    ?>

</body>
</html>