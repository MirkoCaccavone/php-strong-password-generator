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