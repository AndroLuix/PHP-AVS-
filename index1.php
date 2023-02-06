<h2> Lista nominativi</h2>
<a href="nuovo.php?"> Nuovo utente</a>
<?php
require_once("con.php");

//stampare a monitor l'elenco 

//creo variabile e metto il codice sql
$sql = "select * from utenti";
//con l'asterisco seleziono tutti i campi

$result = $con->query($sql);

$array = $result->fetch_all(MYSQLI_ASSOC);
//fetch_all funzione php mi crea un array con tutti i risultati

var_dump($array);
//comando php che fa vedere il contenuto della variabile
//in quanto un array, non lo posso stampare con un echo

//conta valori all'interno dell'array, con funzione php
if (count($array) > 0) {
    echo count($array) . "record trovati <br>";

    echo "<table border '1'>
        <tr>
        <td> Nome </td>
        <td> Cognome </td>
        <td> Data di nascita</td>
        <td> Modifica </td>
        <td> Cancella </td>
        </tr>";

        foreach($array as $ar) {
        echo "<tr>
            <td> $ar[nome] </td>
            <td> $ar[cognome] </td>
            <td> ". date("d-m-Y", strtotime($ar['data_nascita'])) ."</td>
            <td> <a href=\"modifica.php?id=$ar[id]\"> Mofica </a></td>
            <td> <a href=\"javascript: if(confirm('Vuoi cancellare?')){window.location='cancella.php?id=$ar[id]'}\"> Cancella </a></td>
            </tr>";
        }
    echo "</table>";

} else {
    echo "Nessun record trovato";
}
?>
