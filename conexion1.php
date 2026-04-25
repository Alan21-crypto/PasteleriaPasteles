<?php
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQL_DATABASE');
$port = getenv('MYSQLPORT');

// Esto nos dirá si Railway te está dando los datos o no
if (!$user) {
    die("Error: Railway no está enviando las variables de entorno al código.");
}

$con = mysqli_connect($host, $user, $pass, $db, $port);

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
