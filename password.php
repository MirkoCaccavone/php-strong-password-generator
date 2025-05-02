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
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .password-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 50px;
        }
        .password {
            font-size: 24px;
            color: #007bff;
            margin: 20px 0;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        .back-button:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="password-container">
        <a href="./index.php" class="back-button">Torna indietro</a>
        <h2>
            La tua password di <?php echo strlen($password) ?> caratteri é:
        </h2>
        <div class="password">
            <?php echo $password ?>
        </div>
    </div>
</body>
</html>