<?php
$user = new stdClass();
$user->nombre = htmlspecialchars($_POST['nombre']);
$user->apellido  = htmlspecialchars($_POST['apellido']);
$user->email = htmlspecialchars($_POST['email']);
$user->usuario = htmlspecialchars($_POST['usuario']);
$user->clave = htmlspecialchars($_POST['clave']);
$user->telefono = htmlspecialchars($_POST['telefono']);


function insertarContacto($user)
{
  $cnx = new MySqli('localhost', 'root', 'root', 'lista_contactos');
  $sql = "insert into contacto (nombre,apellido,email,usuario,clave,telefono)
  values ('{$user->nombre}','{$user->apellido}','{$user->email}','{$user->usuario}','{$user->clave}','{$user->telefono}')";
  if ($cnx->query($sql) == true) {
    print "<h1>Usuario registrado con exito!!!!</h1>";
  }
}
insertarContacto($user);
