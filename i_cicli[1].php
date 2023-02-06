<?php
    //I CICLI
    //for,while,do
//usati per gli ARRAY, e sono come dei loop

$mul = 1;
//abbiamo settato la variabile $mul a 1

    //ciclo WHILE

echo "ciclo WHILE <br>";
while($mul <= 10){

//fammi un ciclo fino a quando la variabile 
//arriva al valore che noi assegnamo 
//quindi in questo caso per 10 volte
    $ris = 5 * $mul;

//abbiamo crato la variabile risulato che deve essere
//5 per il  valore di mul
    print("5 * $mul = $ris<br>");

//print corrisponde allì'echo
//quindi stampa a video "5+1=5 e <br> per dire che va
//a capo"
    $mul++;

//per farlo funzionare abbiamo incrementato la variabile
//mul, $mul=$mul+1
//me lo ripete fino a quando $mul, non arriva al
//"limite" stabilito da nloi, in questo caso 10
}


/**nell'ispezione sulla pagina web, verrà stampato
 il codice html, ma non il php che abbiamo scritto*/


echo "<br>";
echo "<br>";

    //CICLO DO
echo "ciclo DO <br>";
$mul_do = 11;
do {
    $ris = 5 * $mul_do;
    print("5 * $mul_do = $ris<br>");
    $mul_do++;
} while ($mul_do <= 10);


echo "<br>";
echo "<br>";

//uguale al while

    //ciclo FOR
//meno elastico rispetto al ciclo WHILE
echo "ciclo FOR <br>";
for ($mul = 1; $mul <= 10; $mul++) {
    //tutte le condizioni all'interno della parentesi for
    $ris = 5 * $mul;
    echo "5 * $mul = $ris <br>";
}

echo "<br>";
echo "<br>";

    //ciclo FOR EACH con ARRAY
    //utilizzato per leggere gli array
echo "ciclo FOREACH, ARRAY MONODIMENSIONALE <br>";
$array_mono = array(1, 2, 3, 4, 5);
//monodimensionale è il più semplice
foreach($array_mono as $valore){
    echo $valore;
        //stampa i numeri in sequenza
        //restituisce i singoli valori dell'array
  
}

echo "<br>";
echo "<br>";

foreach ($array_mono as $valore) {
    echo "$valore <br>";
    //me li stampa uno sotto l'altro
}
echo"<br>";

foreach ($array_mono as $valore) {
    $ris = 5 * $valore;
    echo "5 * $valore = $ris <br>";
}

echo"<br>";
echo"<br>";

echo"ciclo FOREACH, ARRAY MULTIDIMENSIONALE <br>";
$array_multidimensionale = array(
    'Marco' => 45,
    //chiave => valore
    'Francesca' => 2,
    //associo francesca a 40 anni
    'Giuseppe' => 30,
    'Renato' => 19);
    //due dati, una chiave e un valore all'interno della virgola

    echo var_dump($array_multidimensionale);
//esempio di come esce stampato a video un array multidimensionale

echo "<br>";
echo "<br>";

$somma_eta = 0;
foreach($array_multidimensionale as $nome => $eta ) {
/*as serve per spiegare cosa contiene un array, e vedere se
mono o multi dimensionale*/
//in questo caso con as spieghiamo che è composto da nome => eta

    if($eta<=12){
        $val = "è un bambino";
    } else if (($eta > 12 ) && ($eta <20)){
        $val = " è un adolescente";
    } else{
        $val = "è un adulto";
    }
    //abbiamo messo una condizione e assegnato un valore
    //ovvero $val, in modo poi da stamparlo

echo "l'utente $nome ha $eta $val <br>";
//stampo il nome, con l'età con la valorizzazione delle condizioni

    $somma_eta += $eta;
    //forma breve di $somma_eta = $somma_eta + $eta

//se stampo qui la sommma, me la darebbe sotto ogni riga di
//stampa precedente, man mano che cicla le somma

}
echo "<br>";
echo "La somma dell'età degli utenti è: $somma_eta";




?>



