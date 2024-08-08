<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    
    <?php

    $test = "Joharry";

    /*
    
    function myFunction()
    {
        global $test;

        $localVar = "Hello, World!";

        return $test;
    }

    echo myFunction();
    */


    // STATIC SCOPE

    function myFunction()
    {
        $staticVar = 0;

        $staticVar++;

        return $staticVar;
    }

    echo myFunction();

    ?>

</body>
</html>