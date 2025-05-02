<?php

require_once './functions.php';
if($password != ""){
    // dirottiamo l'utente alla pagina password.php

    session_start();

    // salviamo la password in una variabile di sessione
    $_SESSION['password'] = $password;

    header("Location: ./password.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="number"] {
            padding: 8px;
            margin: 10px 0;
        }
        label {
            margin-left: 10px;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>
        Generatore di Password
    </h1>

    <form action="">
        <input type="number" name="length" id="length" value="5" min="5" max="20">
        <label for="length">
            Lunghezza password
        </label>
        <br>

        <input type="checkbox" name="letters" type="letters" ><label for="letters">Lettere</label>
        <input type="checkbox" name="numbers" type="numbers" ><label for="numbers">Numeri</label>
        <input type="checkbox" name="specialChars" type="specialChars" ><label for="specialChars">Simboli</label>




        <button type="submit">genera</button>
    </form>

</body>
</html>