<?php
//questo è un commento singola riga
# questo è un commento singola riga
/** questo è un commento
 * su piu' righe */
echo "<h1>ciao Natasha</h1> ";
//echo "come va?";
echo "<br>";
?>





<?php
//SETTARE VARIABILI
$nome = "Natasha";
echo " ciao $nome ";
echo "<br>";
?>

<?php
$nome = "Natasha";
$eta = 25;
echo $nome;
echo $eta;
echo "<br>";
?>

<?php
$nome = "Natasha";
$eta = 25;
echo "mi chiamo " . $nome . " ho " . $eta . " anni " ;
echo "<br>";
?>


<?php
//VALORIZZARE LA VARIABILE
$Nome = 'Maiuscolo';
$nome = "Natasha";
echo "mi chiamo " . $Nome . " ho " . $eta . " anni " ;
//anche se l'assegnazione della variabile è data con le singole apicette, viene comunque
//letta e riconosciuta come variabile
echo "<br>";
?>



<?php
//doppie virgolette o singole apicette sono circa la stessa cosa
//ecco la differenza
$nome = 'Natasha';
$eta = 25;
echo 'Mi chiamo $nome ho $eta anni';
//se stampo a monitor con singole apicette
echo "<br>";
//converte tutto in stringhe, senza riconoscere le variabili, quindi stampando a monitor una
//parola che inizi con il dollaro 
echo "Mi chiamo $nome ho $eta anni";
//se stampo a monitor con doppie apicette
//riconosce tranquillamente le variabili anche senza il (.) di concatenazione
//quindi vengono VALORIZZATE
echo "<br>";
//stampo a video il codice html <br> per andare a capo
?>


<?php
//le variabili con assegnazione di valore numerico le posso scrivere anche 
//precedute la singole apicete, interpretandole come stringhe
$nome = 'Natasha';
$eta = '25';
echo "Mi chiamo $nome ho $eta anni";
echo "<br>";
?>


<?php
//FUNZIONE CHE MI IDENTIFICA IL TIPO DI VARIABILE
//per far leggere le variabili le devo dichiarare prima in quanto funziona "a cascata"
$eta = '25';
$nome = 'Natasha';
echo var_dump($nome);
//mi dice che il nome è una stringa di 7 caratteri
echo "<br>";
$eta = 25;
echo var_dump($eta);
echo "<br>";
//mi dice che è un intero (numero) 
$eta = 25.5;
echo var_dump($eta);
echo "<br>";
//mi dice che è float (numero decimale)
?>






<?php
//TIPI DI VARIABILI 
//stringa = testo
//integer = numeri interi
//float = numeri decimali
//booleani = veri o falsi 
//array = piu' valori all'interno
//oggetti = 
//
?>




<?php
//php index.php
//per aprire il codice della macchina 
echo "\n" //questo è per stampare a video a mamcchina dal terminale
//questo metodo di lavorare con il teminale è consigliato quando usiamo il php puro 
?>



<?php
//VARIABILE BOOLEANI
//variabile VERA se maggiore di zero, o con valore ed è TRUE
$var = true;
echo $var;
//mi stampa 1
echo "<br>";
$var = 'true';
echo $var;
//mi stampa true, come testo in quanto messo tra singole apici, quindi stringa
echo "<br>";
//variabile FALSA
$var = false;
echo $var;
//in questo caso non stampa nulla in quanto nulla
echo "<br>";
?>


<?php
//funzione
$nome = "Marco";
$var = "$nome dice \"ciao come stai?\"";
echo strlen($var);
//da quanti caratteri, in formato numerico è formato la stringa
echo "<br>";
$var1 = substr ($var,6,10);
//SUBSTR, tronchi la variabile togliendo 10 carattero dopo il 6
echo $var1;
echo "<br>";
?>


<?php
$nome = "Marco";
$var = "$nome dice \"ciao come stai?\"";
//STRTOUPPER è la funzione di php, per trasformare una stringa in maiuscola(STRINGA A CARATTERI ALTI)
$var1 = strtoupper ($var);
echo $var1;
//nell'ultima riga di codice, possiamo non mettere il ;
echo "<br>";
?>


<?php
$nome = "Marco";
$var = "$nome dice \"ciao come stai?\"";
// \"...\" serve per stanpare a video con delle virgolette, altrimenti vanno in errore
//funzione per stampare a video, la stringa in minuscolo STRTOLOWER(STRINGA A CARATTERI BASSI)
echo strtolower($var1);
echo "<br>";

//funzione pertrasformare solo la prima stringa(lettera) in maiuscolo
	//UC UP CARACTHER
$var2 = strtolower($var1); 
	//associato una variabile alla funzione che trasforma la stringa tutto in minuscolo
echo ucfirst($var2);
echo "<br>";

//funzione pertrasformare solo la prima stringa(lettera) in minuscolo
	//LC LOW CARACTHER	
echo lcfirst($var1);
echo "<br>";

//funzione peer rendere maiuscolo solo la prima lettera delle parole
	//UPPERCASE WORDS
	//la c dopo le virgolette, dato che non c'è spazio viene lasciata minuscola in quanto riconosce
	//parola la stringa che ha spazio avanti e dietro, quindi che dopo le virgolette ci fosse
	//stato lo spazio, anche essa sarebbe stata maiuscola
echo ucwords($var2);
echo "<br>";

//funzione per scrivere la stringa al contrario (effetto specchio)
echo strrev ($var1);
echo "<br>";

//funzione per fare una sostituzione all'interno di stringa
	//stringa da sostituire, stringa con cui sostituire, nome stringa su cui 
	//stiamo applicando la funzione
	//case_sensitive, quindi kse il ciao fosse scritto con la maiuscola, non funzionerebbe 
echo str_replace("ciao","",$var);
	//echo str_ireplace("ciao","",$var);
	//con la I davanti a replace non è più case_sensitive quindi la leggerebbe lo stesso
?>


<?php

//ARRAY, CONTENITORE DI PIù VALORI

//CREAZIONE ARRAY
	//variabile globale($var3) con più valori numerici, e non
	//all'interno dell'array posso inserirci anche il nome di un altra variabile
	//con la , differenzio i vari valori che assegno all'array
$array_var3 = array("a",1, 2, 3,"$var");
//echo $var3; //così viene segnato errore, non posso stampare a video 
echo var_dump($array_var3);//visualizza a monitor cosa contiene tale array

echo "<br>";

$nome = "Marco";
$var = "$nome dice: \"ciao come stai?\"";
//funzione EXPLODE
	//dove spezza la stringa, definizione della stringa
$array_var4 = explode(":", $var);
echo var_dump($array_var4);

echo "<br>";

//funzione opposta ad EXPLODE, ovvero IMPLODE
	//l'array metti una virgola e uniscili in un unica stringa
echo implode(",", $array_var4);
echo "<br>";
?>

<?php
define('COSTANTE', 'stringa');
echo COSTANTE;
echo "<br>";
?>

