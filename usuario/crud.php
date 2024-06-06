<?php


require_once 'conexion.php';

function crearUsuario($usuario, $password, $nombre, $tipo_usuario) {
  $sql = "INSERT INTO usuarios (usuario, password, nombre, tipo_usuario) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $usuario, $password, $nombre, $tipo_usuario);
  $stmt->execute();
  $stmt->close();
}


function leerUsuarios() {
  $sql = "SELECT * FROM usuarios";
  $result = $conn->query($sql);
  $usuarios = array();
  while ($row = $result->fetch_assoc()) {
    $usuarios[] = $row;
  }
  return $usuarios;
}


function leerUsuarioPorId($id) {
  $sql = "SELECT * FROM usuarios WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuario = $result->fetch_assoc();
  return $usuario;
}


function actualizarUsuario($id, $usuario, $password, $nombre, $tipo_usuario) {
  $sql = "UPDATE usuarios SET usuario = ?, password = ?, nombre = ?, tipo_usuario = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssi", $usuario, $password, $nombre, $tipo_usuario, $id);
  $stmt->execute();
  $stmt->close();
}


function eliminarUsuario($id) {
  $sql = "DELETE FROM usuarios WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $stmt->close();
}


function buscarUsuarioPorUsuario($usuario) {
  $sql = "SELECT * FROM usuarios WHERE usuario = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $usuario);
  $stmt->execute();
  $result = $stmt->get_result();
  $usuario = $result->fetch_assoc();
  return $usuario;
}
?>