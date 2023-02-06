<?php
require_once("con.php");
//richiamo la query per stabilire la connessione

$id = $_GET['id'];
/*get cattura info da hrm
POST cattura tramite form dall'html
GET i dati li prende attraverso url, ovvero il valore del link*/
//è più sicuro post perchè non è modificabile

//echo $id

$sql = "DELETE FROM utenti WHERE id=$id";
//echo $sql;

$result = $con->query($sql);
echo $result . " il record è stato cancellato <br><br> <a href='index.php'> Torna alla lista utenti </a>";
?>