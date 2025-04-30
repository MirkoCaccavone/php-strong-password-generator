<?php

require_once './functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
</head>
<body>
    <h1>
        Generatore di Password
    </h1>

    <form action="">
        <input type="number" name="length" id="length" required min="5" max="20">
        <label for="length">
            Lunghezza password
        </label>
        <button type="submit">genera</button>
    </form>

    <?php
    if($password != ""){
    ?>
    <h2>
        La tua password di <?php echo $_GET['length'] ?> caratteri é:
    </h2>
    <pre>
        <?php echo $password?>
    </pre>
    <?php
    }
    ?>

</body>
</html>