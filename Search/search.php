<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "./dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch ";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
        $pdo = null;
        $stmt = null;


    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>
<a href="./dbh.inc.php"></a>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    
    <h3>Search Result</h3>

    <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no Results!</p>";
            echo "</div>";
        } else {
            var_dump($results);
        }
        
    ?>

</body>
</html>