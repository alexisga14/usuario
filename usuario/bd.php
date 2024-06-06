<?php
$serverName="DESARROLLO5";
$username="sa";
$password="12345";
$databaseName="Alexis";


try {
	$conn = new PDO("sqlsrv:server=$serverName;database=$databaseName;Encrypt = false;TrustServerCertificate = false",$username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Ocurrió un error al realizar la conexión a la base de datos: " . $e->getMessage();
	die();
}