<?php
require_once("conn.php");
//stabilisco la connessione

if (isset($_POST['Salva']))/**se schiacchi salva */ {

$id = $_POST['id'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$datadinascita = str_ireplace('/','-',$_POST['datadinascita']);

if (!preg_match('/^[0-9]{2}-{1}[0-9]{2}-{1}[0-9]{4}$/', $datadinascita)) {
echo "Data errata";
exit;
}


$timeStamp = strtotime($datadinascita);
$mysqldata = date("Y-m-d", $timeStamp);


$sql = "update utenti set nome=\"$nome\", cognome=\"$cognome\",
datadinascita=\"$mysqldata\" WHERE id = $id";
$result = $con->query($sql);


echo "$result record è stato modificato<br><br> <a href='index.php'>Torna alla lista utenti</a>";

} else {

$id = $_GET['id'];
$sql = "select * from utenti where id=$id";
/**perchè da li prendo le info dove id è uguale*/
$result = $con->query($sql);
//faccio girare la query
$array = $result->fetch_array();
//faccio creare array a ciclo

$id = $array['id'];
$nome = $array['nome'];
$cognome = $array['cognome'];
$datadinascita = date("d-m-Y", strtotime($array['datadinascita']));
//prendo tutti i dati, correggendo la data da americana a italiana
//associando ogni singola variabile
?>
<h2>Modifica nominativo</h2>


<form method="POST">
Nome <input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
<!--value assegno un valore-->
Cognome <input type="text" name="cognome" value="<?php echo $cognome; ?>"></br><br>
Data di nascita <input type="text" name="datadinascita" placeholder="gg-mm-aaaa" value="<?php echo $datadinascita; ?>"></br><br>
<input type="hidden" name="id" value="<?php echo $id; ?>" >

<input type="submit" name="Salva" value="Salva">
<input type="reset" value="Reset">
</form>

<?php
}