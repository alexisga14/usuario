<?php
// Configuración de la conexión
$serverName = "DESARROLLO5"; // nombre del servidor
$username = "sa"; // usuario de la base de datos
$password = "12345"; // contraseña de la base de datos
$databaseName = "Alexis"; // nombre de la base de datos

try {
    // Crear una instancia de PDO con la conexión a la base de datos
    $conn = new PDO(
        "sqlsrv:server=$serverName;database=$databaseName;Encrypt=false;TrustServerCertificate=false",
        $username,
        $password
    );

    // Establecer el modo de errores para que se lancen excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    // Mostrar un mensaje de error si ocurre un problema al conectar
    echo "Ocurrió un error al realizar la conexión a la base de datos: " . $e->getMessage();
    die();
}
?>