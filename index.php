<?php
    $password = "";

// Funzione per generare una password casuale
if (isset($_GET['length'])){
    // controlla se è stato passato un valore per la lunghezza della password
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+[]{}|;:,.<>?';


    // variabile che contiene i caratteri da usare per generare la password
    $allChars = $letters . $numbers . $specialChars;

    // var_dump ($allChars);


    


    
    // aggiungiamo il carattere randomico alla password
    for ($i = 0; $i < $_GET['length']; $i++){

        // prendiamo un carattere randomico da $allChars
        $randomPosition = rand(0, strlen($allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);

        $password .= $randomCharacter;
    }   
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