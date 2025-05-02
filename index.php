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