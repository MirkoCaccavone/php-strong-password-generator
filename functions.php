<?php

   $password = "";

// Funzione per generare una password casuale
if (isset($_GET['length'])){
    // controlla se è stato passato un valore per la lunghezza della password
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+[]{}|;:,.<>?';

    $allChars = ''; // variabile che conterrà i caratteri da usare per generare la password

    // controlla se inserire le lettere
    if (isset($_GET['letters']) && $_GET['letters'] == 'on'){
        // se è stato selezionato il checkbox delle lettere, aggiungiamo le lettere alla password
        $allChars .= $letters;  
    }

    // controlla se inserire le numeri
    if (isset($_GET['numbers']) && $_GET['numbers'] == 'on'){
        // se è stato selezionato il checkbox dei numeri, aggiungiamo i numeri alla password
        $allChars .= $numbers;  
    }


    // controlla se inserire i simboli
    if (isset($_GET['specialChars']) && $_GET['specialChars'] == 'on'){
        // se è stato selezionato il checkbox dei simboli, aggiungiamo i simboli alla password
        $allChars .= $specialChars;  
    }
    

    // variabile che contiene i caratteri da usare per generare la password
    // $allChars = $letters . $numbers . $specialChars;

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