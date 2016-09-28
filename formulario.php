<form action="formulario.php" method="post">
  <input type="text" name="nombre" placeholder="nombre"><br>
  <input type="text" name="apellido" placeholder="apellido"><br>
  <input type="text" name="direccion" placeholder="direccion"><br>
  <input type="number" name="telefono" placeholder="telefono"><br>
  <input type="text" name="ciudad" placeholder="ciudad"><br>
  <textarea name="descripcion" rows="8" cols="40"></textarea><br>
  <input type="email" name="email" placeholder="email"><br>
  <input type="number" name="edad" placeholder="edad"><br>
  <button type="submit" name="button">Enviar</button>
</form>
<?php
print_r($_POST);

?>
