<?php
// Recupero i valori inseriti nel form
$nome = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['pass'];
$cf=$_POST['cf'];
echo "nome : $nome";
/*



$utenza = $_POST['utenza'];
$nome = $_POST['name'];
$nome = $_POST['name'];
$nome = $_POST['name'];

// dati di connessione al mio database MySQL
$db_host = 'localhost';
$db_user = 'SmartTravelling';
$db_pass = '';
$db_name = 'test';

// connessione al DB utilizzando MySQLi
$cn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// verifica su eventuali errori di connessione
if ($cn->connect_errno) {
    echo "Connessione fallita: ". $cn->connect_error . ".";
    exit();
}

// definisco la query di inserimento dati
$sql = "INSERT INTO utente (Codicefiscale, Nominativo, Email, Password) VALUES ("
     . "'" . $cf . "',"
     . "'" . $nome . "',"
     . "'" . $email . "',"
     . "'" . $password . "')"

// esecuzione della query
if (!$cn->query($sql)) {
  echo "Errore della query: " . $cn->error . ".";
}else{
  echo "Registrazione effettuata correttamente.";
}

// chiusura della connessione
$cn->close();




*/
?>
