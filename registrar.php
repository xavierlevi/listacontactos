<?php
$user = new stdClass();
$user->nombre = $_POST['nombre'];
$user->apellido  = $_POST['apellido'];
$user->email = $_POST['email'];
$user->usuario = $_POST['usuario'];
$user->clave = $_POST['clave'];
$user->telefono = $_POST['telefono'];

$cnx = new MySqli('localhost', 'root', 'root', 'lista_contactos');
$sql = "insert into contacto (nombre,apellido,email,usuario,clave,telefono)
values ('{$user->nombre}','{$user->apellido}','{$user->email}','{$user->usuario}','{$user->clave}','{$user->telefono}')";
if ($cnx->query($sql) == true) {
  print "<h1>Usuario registrado con exito!!!!</h1>";
}
