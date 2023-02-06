<?php
$eta = 6;

if($eta<=12){
    echo "è un bambino";
} elseif (($eta > 12 ) and ($eta <20)){
    echo " è un adolescente";
} else{
    echo "è un adulto";
}

echo "<br>";

//quando mettiamo la doppia condizione con && o and
//vanno entrambe in un unica parentesi che racchiude le due 
//condizioni nelle rispettive parentesi

$eta = 18;

if($eta<=12){
    echo "è un bambino";
} elseif (($eta > 12 ) && ($eta <20)){
    echo " è un adolescente";
} else{
    echo "è un adulto";
}

echo "<br>";

$eta = 40;

if($eta<=12){
    echo "è un bambino";
} else if (($eta > 12 ) && ($eta <20)){
    echo " è un adolescente";
} else{
    echo "è un adulto";
}

echo "<br>";

$eta = 20;

echo "<br>";

echo "<br>";

$eta = 12;
//se non metto anche = insieme a <
//non me lo leggerebbe il 12, ma fino all'11 e dal 13

if($eta<=12){
    echo "è un bambino";
} else if (($eta > 12 ) && ($eta <20)){
    echo " è un adolescente";
} else{
    echo "è un adulto";
}

echo "<br>";
?>

            

<?php

echo "<br>";

$eta = 45;

// se il case è stringa, mettiamo le apicette
/*se il case è numeero,
mettiamo le parentesi richiamando la variabile*/
switch($eta){
    case ($eta <= 12):
        echo "è un bambino";
        break;
    case ($eta <20):
        echo "è un adolescente";
        break;
    default:
        echo "è un adulto";
        break;
}


//default o case nell'ultima condizione
//defaul = else
//case = elseif

/*break, serve a fermare la lettura, altrimenti
da tutte le risposte vere*/

echo "<br>";

$eta = 15;

switch($eta){
    case ($eta <= 12):
        echo "è un bambino";
        break;
    case ($eta <20):
        echo "è un adolescente";
        break;
    default:
        echo "è un adulto";
        break;
}

echo "<br>";

$eta = 7;

switch($eta){
    case ($eta <= 12):
        echo "è un bambino";
        break;
    case ($eta <20):
        echo "è un adolescente";
        break;
    default:
        echo "è un adulto";
        break;
}

echo "<br>";
?>