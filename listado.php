<?php
function listarContactos()
{
  $cnx = new MySqli('localhost', 'root', 'root', 'lista_contactos');
  $sql = "select * from contacto";
  $resultados = $cnx->query($sql);
  $value = array();
  while ($fila = $resultados->fetch_object()) {
    $value[] = $fila;
  }
  return $value;
}
$elementos = listarContactos();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>lista de contactos</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>email</th>
                <th>usuario</th>
                <th>clave</th>
                <th>telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
          <?php
          foreach ($elementos as $value ): ?>
            <tr>
              <th><a href=" <?php print "detalle.php?id=" . $value->id ?>" ><?php print $value->id ?></a></th>
              <th><?php print $value->nombre ?></th>
              <th><?php print $value->apellido ?></th>
              <th><?php print $value->email ?></th>
              <th><?php print $value->usuario ?></th>
              <th><?php print $value->clave ?></th>
              <th><?php print $value->telefono ?></th>
              <th>
                <a href=" <?php print "editar.php?id=" . $value->id ?>" >Editar</a>
                <a href=" <?php print "eliminar.php?id=" . $value->id ?>" >Eliminar</a>
              </th>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
