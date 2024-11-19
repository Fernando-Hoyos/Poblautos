<?php
//Solicitar la conexion de la BD 
include '../Includes/conecta.php';
include '../Includes/send.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Styles/form_Ventas.css">
  <title>Document</title>
</head>

<body>
  <form class="form_p" method="post" autocomplete="off">
    <h2>Registro de Ventas</h2>
    <div class="input-group">
      <div class="input-container">
        <input type="text" name="id_cliente" placeholder="ID Cliente" required>
      </div>
      <div class="input-container">
        <input type="text" name="id_sucursal" placeholder="ID Sucursal" required>
      </div>
      <div class="input-container">
        <input type="text" name="id_vehiculo" placeholder="ID Vehiculo" required>
      </div>
      <div class="input-container">
        <input type="date" name="fecha" required>
      </div>
      <input type="submit" name="send" class="btn" value="Guardar">
    </div>


  </form>
</body>

</html>