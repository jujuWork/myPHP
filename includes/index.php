<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>

        <form action="formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname...">
            
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">

            <label for="pet">Pet</label>
            <select name="pet" id="pet">
                <option value="none">None</option>
                <option value="cat">Cat</option>
                <option value="dog">Dog</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>

    </main>
    
</body>
</html>