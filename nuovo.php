<?php
//catturare il tasto salva, inserendolo in variabile
if(isset( $_POST['salva'])){

    require_once("con.php");
    /*funzione per richiamare un file esterno,
        sempre che la funzione salva è vera */
    //require_once("nomefile.php")

    /*se la variabile esiste, è stata settata, ovvero 
    hai schiacciato il bottone salva, esegui lo script */
    
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    /*con tale funzione impostiamo che lo / me lo deve 
    trasformare in - */
    $data_nascita = str_ireplace('/', '-', $_POST['data_nascita']);

    //annidamento delle condizioni, ovvero, un if dentro un altro if
    if(!preg_match('/^[0-9]{2}-{1}[0-9]{2}-{1}[0-9]{4}$/', $data_nascita)){
        echo "Data errata";
        exit;
        //! con il punto esclamativo avanti alla funzione
        //verrà eseguita la condizione nel momento in cui non è vera
    }



    //imposto la data come formato data e no stirnga
    $data_nascita = strtotime($data_nascita);
    //assegno il paramentro di come va stampata, quindi Y-m-d
    $data_nascita = date("Y-m-d", $data_nascita);


    $sql = "insert into utenti (nome, cognome, data_nascita)
    values ('$nome', '$cognome', '$data_nascita')";
    /* inserisci nella tabella utenti(campi che compongono)
     come (variabili corrispondenti nell'ordine)*/

    $result = $con->query($sql);
    /**funzione php
     * risultato = variabile dai la connessione($con)
     * ->(invii) quello che contiene la query ($sql)
     */
    echo $sql;

    echo "<br>";

    /*echo "$nome $cognome $data_nascita";
    stampa a video le variabili*/

    echo "$result record inserito correttamente <br><br> <a href='index.php'> Torna alla lista degli utenti</a>";
} else {
 
    //se la condizione è falsa, quindi non hai 
    //schiacciato il bottone salva, mostra l'html


?>

<!-- html fa parte di else -->

<h2> CREAZIONE NUOVO NOMINATIVO </h2>
<!--comunicare html e php -->
<form method="post">
    <!-- metodo utilizzato per inviare campi -->
    <!-- maschera per inserire i dati -->
    <!-- all'interno inserirsco i campi che ho al database -->
    Nome <input type="text" name="nome"> <br> <br>
    Cognome <input type="text" name="cognome"> </br> <br>
    Data di nascita <input type="text" name="data_nascita" placeholder="gg-mm-aaaa"></br><br>
    
    <input type="submit" name="salva" value="salva">
    <input type="reset" name="reset">
</form>

<?php
} //questa graffa è la chiusura dell'else
?>