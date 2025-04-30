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
        <input type="number" name="length" id="length" required min="5" max="20">
        <label for="length">
            Lunghezza password
        </label>
        <button type="submit">genera</button>
    </form>

</body>
</html>