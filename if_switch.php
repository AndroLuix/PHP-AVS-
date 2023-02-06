<?php

$colore = 'rosso';

//ciclo condizioni if
if($colore == 'blu'){
    echo "il colore selezionato è blu";
}elseif($colore == 'giallo'){
    echo "il colore selezionato è giallo";
}elseif($colore == 'verde'){
    echo "il colore selezionato è verde";
}elseif($colore == 'rosso'){
    echo "il colore selezionato è rosso";
}else{
    echo "nessun colore corrispondente alla tua selezione";
}
echo "<br>";

//if condizioni più complicate
//switch più semplice

    //stesso risultato, modo diverso per scrivere


//ciclo condizione switch
    //case = elseif
    //default = else

switch($colore){
    case 'blu':
        echo 'il colore selezionato è blu';
        break;
    case 'giallo':
        echo 'il colore selezionato è giallo';
        break;
    case 'verde':
        echo 'il colore selezionato è verde';
        break;
    case 'rosso':
        echo 'il colore selezionato è rosso';
        break;
    default:
        echo 'nessun colore corrispondente alla tua selezione';
        break;
}
?>