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
  <link rel="stylesheet" href="../Styles/tablas.css">
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
    <input type="submit" value="Ver Tabla">
  </form>

  <?php
  //var_dump($_GET); // Esto te ayudará a ver qué parámetros están llegando en la URL.
  /*
  if (isset($_GET['table'])) {
    $table = $_GET['table'];

    // Obtener los datos de la tabla seleccionada
    $query = "SELECT * FROM `$table`";
    $result = $conecta->query($query);

    if (!$result) {
      die("Error al ejecutar la consulta: " . $conecta->error);
    }

    // Verificar si la consulta devuelve datos
    if ($result->num_rows > 0) {
      // Mostrar la tabla de resultados
      echo "<table border='1'>";
      echo "<thead><tr>";

      // Obtener los nombres de las columnas
      $fields = $result->fetch_fields();
      foreach ($fields as $field) {
        echo "<th>{$field->name}</th>";
      }
      echo "</tr></thead><tbody>";

      // Filas con los datos
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "No hay datos en esta tabla.";
    }
  }*/
  ?>

</body>

</html>