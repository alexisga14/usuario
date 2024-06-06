<?php

$serverName = "DESARROLLO5";
$database = "Alexis";
$username = "sa";
$password = "12345";

$conn =  sqlsrv_connect($serverName, array("Database"=>$database, "UID"=>$username, "PWD"=>$password));


if ($conn === false) {
  die("Connection failed: ". sqlsrv_errors());
}


if (isset($_POST["registro_usuario"])) {
  $usuario = $_POST["usuario"];
  $nombre = $_POST["nombre"];
  $password = $_POST["password"];
  $tipo = $_POST["tipo"];


  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO usuarios (usuario, nombre, password, tipo) VALUES (?,?,?,?)";
  $params = array($usuario, $nombre, $password_hash, $tipo);
  $stmt = sqlsrv_query($conn, $sql, $params);


  header("Location: confirmacion_registro.php");
  exit;
}

sqlsrv_close($conn);
?>