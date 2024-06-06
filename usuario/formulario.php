<?php


require_once 'crud.php';

if (isset($_POST['crear'])) {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $nombre = $_POST['nombre'];
  $tipo_usuario = $_POST['tipo_usuario'];
  crearUsuario($usuario, $password, $nombre, $tipo_usuario);
  header('Location: formulario.php');
  exit;
}

if (isset($_POST['actualizar'])) {
  $id = $_POST['id'];
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $nombre = $_POST['nombre'];
  $tipo_usuario = $_POST['tipo_usuario'];
  actualizarUsuario($id, $usuario, $password, $nombre, $tipo_usuario);
  header('Location: formulario.php');
  exit;
}

if (isset($_POST['buscar'])) {
    $usuario = $_POST['usuario'];
    $resultado = buscarUsuarioPorUsuario($usuario);
    if ($resultado) {
      echo "Usuario encontrado: ". $resultado['nombre']. " (". $resultado['usuario']. ")";
    } else {
      echo "Usuario no encontrado";
    }
  }