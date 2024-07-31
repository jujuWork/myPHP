<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        //STRING OPERATOR

        $a = "Hello";
        $b = "World";
        $c = $a . " " . $b;

        echo $c;

        echo "<br>";

        // ARITHMETIC OPERATOR
        // + - / * ** 
        echo 1 + 2;
        
        echo "<br>";

        // Assignment operator
        $a = 2;
        $a += 4;
        echo $a;

        echo "<br>";

        // Comparison operator
        // == != < <= > >==

        $a = 2;
        $b = 2;

        if ($a != $b) {
            echo "This is True!";
        } else {
            echo "This is False!";
        }

        echo "<br>";

        // Logical operator
        $a = 4;
        $b = 4;
        $c = 2;
        $d = 6;

        if ($a == $b or $c == $d) {
            echo "This is True!";
        }

        echo "<br>";
    ?>




</body>
</html>