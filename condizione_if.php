<?php
//condizione singola
if(1<2){
    echo 'vero';
}

echo "<br>";

//questo non essendo vero, non stampa nulla a video 
if(1>2){
    echo 'vero';
}

echo "<br>";

if(1==1){
    echo 'vero';
}

echo "<br>";

//doppia condizione
if(1<2){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";

if(1>2){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";

?>

<?php
//doppia condizione
    //AND, tutte e due devono essere vere
if((1<2) && (1==1)){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";

    //and o && 
if((1>2) && (1==1)){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";

    //il terzo uguale sta per indicare di verificre che sia anche lo stesso tipo
if((1>2) && (1===1)){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";

    //OR, una delle due deve essere vera
if((1>2) or (1==1)){
    echo 'vero';
} else {
    echo 'falso';
}

echo "<br>";
echo "<br>";
?>



<?php
$nome = 'Natasha';
$messaggi = 10;
if ($nome == 'Marco'){
    echo "ciao $nome <br>";
    echo " Benvenuto sul nostro sito hai $messaggi messaggi";
} //'elseif' si può scrivere anche staccato 'else if'
 elseif ($nome == 'Francesco'){
    echo "ciao $nome <br>";
    echo " Benvenuto sul nostro sito hai $messaggi messaggi";
} else {
    echo "Non sei Marco";
}

echo "<br>";

if ($nome == 'Marco'){
    echo "ciao $nome <br>";
    echo " Benvenuto sul nostro sito hai $messaggi messaggi";
} elseif ($nome == 'Natasha'){
    echo "ciao $nome <br>";
    echo " Benvenuto sul nostro sito, hai $messaggi messaggi";
} 

echo "<br>";
echo "<br>";

//operatore TERNARIO
echo ($nome == 'Marco')? "ciao $nome .<br> Benbenuto sul nostro sito, hai $messaggi messaggi" : "Non sei marco"
//stampa condizione vera : stampa condizione falsa

?>