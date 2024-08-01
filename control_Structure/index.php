<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    // IF ELSE STATEMENT

    $bool = true;
    $a = 1;
    $b = 4;

    if ($a < $b && !$bool) {
        echo "First condition is true!";
    } else if ($a < $b && !$bool) {
        echo "Second Condition is true!";
    } else {
        echo "None of the Conditions were true";
    }

    // SWITCH STATEMENT

    switch ($b) {
        case 1:
            echo "The first case is correct";
            break;
        case 2:
            echo "The second case is correct";
            break;
        default:
            echo "None of the conditions were true!";
    }
    
    ?>

</body>
</html>