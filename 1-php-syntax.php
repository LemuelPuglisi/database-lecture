<?php

//===================================================
// Strutture di controllo - IF (slide 56)
//===================================================

$b = -1;

if ($b == 0) {
    echo "b è zero\n";
}
else if ($b > 0) {
    echo "b è positivo\n";
}
else {
    echo "b è negativo\n";
}

//===================================================
// Strutture di controllo - SWITCH (slide 57)
//===================================================

// $frutto = "mela";

// switch ($frutto) {
//     case "mela":
//         echo "Hai scelto una mela!";
//         break;
//     case "banana":
//         echo "Hai scelto una banana!";
//         break;
//     case "arancia":
//         echo "Hai scelto un'arancia!";
//         break;
//     default:
//         echo "Frutto non disponibile.";
//         break;
// }

//===================================================
// Strutture iterative (slide 58)
//===================================================

// $numero = 1;

// echo "Numeri da 1 a 10:<br>";

// while ($numero <= 10) {
//     echo $numero . "\n";
//     $numero++; // Incrementa il valore di $numero
// }

//===================================================
// Strutture iterative (slide 59)
//===================================================

// echo "Numeri da 1 a 10:<br>";

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "\n";
// }

//===================================================
// Array (slide 30)
//===================================================

// $primi = array(2, 3, 5, 7);

// for ($i = 0; $i < count($primi); $i++) {
//     echo $primi[$i] . "\n";
// }

// $mixed = array(1, "ciao", 3.14, true);

// for ($i = 0; $i < count($mixed); $i++) {
//     echo $primi[$i] . "\n";
// }

//===================================================
// Array associativi (slide 31) [e for avanzato]
//===================================================

// $persone = [
//     "Alice"     => 25,
//     "Bob"       => 30,
//     "Charlie"   => 35,
//     "David"     => 40
// ];

// echo "Età delle persone:<br>";

// foreach ($persone as $nome => $eta) {
//     echo "$nome ha $eta anni.\n";
// }

//===================================================
// Manipolazione delle stringhe (slide 32 fino a 35)
//===================================================

// // La funzione substr() restituisce una porzione di stringa a partire da una posizione specificata.
// $stringa = "Ciao, come va?";
// $sottostringa = substr($stringa, 5, 4); // Inizia alla posizione 5 e prende 4 caratteri
// echo $sottostringa . "\n"; // Risultato: "come"

//===================================================

// // La funzione strlen() restituisce la lunghezza di una stringa.
// $stringa = "Ciao!";
// $lunghezza = strlen($stringa);
// echo $lunghezza . "\n"; // Risultato: 5

//===================================================

// // La funzione trim() rimuove gli spazi bianchi (o altri caratteri) all'inizio e alla fine di una stringa.
// $stringa = "   Ciao!   ";
// $stringa_trimmed = trim($stringa);
// echo $stringa_trimmed . "\n"; // Risultato: "Ciao!"

//===================================================

// // La funzione ucfirst() converte la prima lettera di una stringa in maiuscolo.
// $stringa = "ciao!";
// $stringa_ucfirst = ucfirst($stringa);
// echo $stringa_ucfirst . "\n"; // Risultato: "Ciao!"

//===================================================

// // La funzione ucwords() converte la prima lettera di ogni parola in maiuscolo.
// $stringa = "ciao come va?";
// $stringa_ucwords = ucwords($stringa);
// echo $stringa_ucwords . "\n"; // Risultato: "Ciao Come Va?"

//===================================================

// // La funzione strpos() trova la prima occorrenza di un pattern in una stringa e restituisce la posizione.
// $stringa = "Ciao, come va?";
// $posizione = strpos($stringa, "come");
// echo $posizione . "\n"; // Risultato: 6 (la posizione di "come" nella stringa)

//===================================================

// // La funzione strrpos() trova l'ultima occorrenza di un pattern in una stringa e restituisce la posizione.
// $stringa = "Ciao, come va? Come stai?";
// $posizione = strrpos($stringa, "come");
// echo $posizione . "\n"; // Risultato: 14 (la posizione dell'ultima occorrenza di "come")

//===================================================

// // La funzione str_replace() sostituisce una parte di stringa con un'altra.
// $stringa = "Ciao, come va?";
// $nuova_stringa = str_replace("come", "tutto", $stringa);
// echo $nuova_stringa . "\n"; // Risultato: "Ciao, tutto va?"

//===================================================

// // La funzione nl2br() converte i caratteri di nuova riga (\n) in tag <br> HTML.
// $stringa = "Ciao!\nCome va?";
// $stringa_con_br = nl2br($stringa);
// echo $stringa_con_br . "\n"; // Risultato: "Ciao!<br>Come va?"

//===================================================

// // La funzione urlencode() converte una stringa in formato URL encoded, utile per query string.
// $stringa = "Ciao come va?";
// $stringa_urlencoded = urlencode($stringa);
// echo $stringa_urlencoded . "\n"; // Risultato: "Ciao+come+va%3F"

//===================================================

// // La funzione urldecode() decodifica una stringa URL encoded.
// $stringa = "Ciao+come+va%3F";
// $stringa_decodificata = urldecode($stringa);
// echo $stringa_decodificata . "\n"; // Risultato: "Ciao come va?"

//===================================================

// // La funzione strrev() restituisce la stringa invertita.
// $stringa = "Ciao";
// $stringa_invertita = strrev($stringa);
// echo $stringa_invertita . "\n"; // Risultato: "oaiC"

//===================================================

// // La funzione str_word_count() conta le parole in una stringa o restituisce un array con le parole.
// $stringa = "Ciao, come va?";
// $conteggio_parole = str_word_count($stringa); // Conta le parole
// echo $conteggio_parole . "\n"; // Risultato: 4

//===================================================

// // Con modalità 1, restituisce un array delle parole
// $parole = str_word_count($stringa, 1);
// print_r($parole) . "\n"; // Risultato: Array ( [0] => Ciao [1] => come [2] => va )

//===================================================

// // La funzione explode() divide una stringa in un array utilizzando un separatore.
// $stringa = "Ciao,come,va?";
// $array = explode(",", $stringa);
// print_r($array) . "\n"; // Risultato: Array ( [0] => Ciao [1] => come [2] => va? )

//===================================================

// // La funzione implode() crea una stringa a partire da un array, unendo gli elementi con un separatore.
// $array = ["Ciao", "come", "va?"];
// $stringa = implode(" ", $array);
// echo $stringa . "\n"; // Risultato: "Ciao come va?"
