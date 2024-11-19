<?php
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

require_once 'index_login.php';
require_once '../Templates/templates_Dashboard/' . $pagina . '.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Styles/index_login.css" />
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>PoblAutos</title>
</head>

<body>
  <section class="container">
    <div class="sidebar">
      <div class="side-hide">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <img src="../Imag/Logo.png" alt="" />
      <ul>
        <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>"><a href="?p=inicio">Inicio</a></li>
        <li class="<?php echo $pagina == 'form_Ventas' ? 'active' : ''; ?>"><a href="?p=form_Ventas">Registro de Ventas</a></li>
        <li><a href="#">Listado de Datos</a></li>
        <li><a href="#">Tablero</a></li>
        <li><a href="../Templates/index.php">Cerrar Sesión</a></li>
      </ul>
    </div>
  </section>
</body>

</html>