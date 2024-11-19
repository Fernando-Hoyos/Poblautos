<?php
include '../Includes/conecta.php';  // Asegúrate de que el archivo de conexión está incluido

// Consulta para obtener las tablas
$query = "SHOW TABLES";
$result = $conecta->query($query);

if (!$result) {
  die("Error al ejecutar la consulta: " . $conecta->error);
}

// Recuperar las tablas en un array
$tables = [];
while ($row = $result->fetch_assoc()) {
  $tables[] = $row;
}

// Verificar si hay tablas
if (empty($tables)) {
  echo "No se encontraron tablas en la base de datos.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Styles/list_tabla.css">
  <title>Tabla</title>
</head>

<body>
  <!-- Formulario para seleccionar una tabla -->
  <form method="get" action="http://localhost/poblautos/Templates/tabla.php?" autocomplete="off">
    <label for="tableSelect">Selecciona una tabla:</label>
    <select name="table" id="tableSelect">
      <?php
      // Mostrar las tablas disponibles
      foreach ($tables as $table) {
        $tableName = current($table); // El nombre de la tabla está en la primera columna
        echo "<option value='$tableName'>$tableName</option>";
      }
      ?>
    </select>
    <input type="submit" value="Ver Tabla" class="btn">
  </form>

</body>

</html>