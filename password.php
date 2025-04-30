<?php
session_start();

$password = $_SESSION['password'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <a href="./index.php">torna indietro</a>
     <h2>
        La tua password di <?php echo strlen($password) ?> caratteri é:
    </h2>
    <pre>
        <?php echo  $password ?>
    </pre>
</body>
</html>