<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST["usersearch"];

    try {
        require_once "../includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username = :usersearch ";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch, $userSearch");

        $stmt->execute();
 
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    


</body>
</html>