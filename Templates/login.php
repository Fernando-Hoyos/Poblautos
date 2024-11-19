<?php
//Solicitar la conexion de la BD 
if ($_POST) {
  include '../Includes/conecta.php';

  $username = $_POST['login-name'];
  $password = $_POST['login-pass'];

  // Usar consultas preparadas
  $query = 'SELECT * FROM usuario WHERE usuario = ? AND pass = ?';
  $stmt = $conecta->prepare($query);
  if (!$stmt) {
    die('Error en la consulta preparada: ' . $conecta->error);
  }

  $stmt->bind_param('ss', $username, $password);
  $stmt->execute();
  $stmt->store_result(); // Necesario para contar filas

  if ($stmt->num_rows > 0) {
    header('Location: index_login.php');
    exit();
  } else {
    $error_message = 'Usuario/Contraseña incorrecta';
  }

  $stmt->close();
  $conecta->close();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Styles/login.css" />
  <link
    rel="shortcut icon"
    href="../Imag/perfil-del-usuario.png"
    type="image/x-icon" />
  <title>Login</title>
</head>

<body>
  <div class="error-message">
    <?php
    if (!empty($error_message)) {
      // Mostrar el mensaje de error
      echo '<div class="alert alert-warning">' . $error_message . '</div>';
    }
    ?>
    <script>
      setTimeout(function() {
        var message = document.querySelector('.error-message');
        if (message) {
          message.style.display = 'none'; // Oculta el mensaje
        }
      }, 5000); // Tiempo en milisegundos (5 segundos)
    </script>
  </div>

  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Iniciar Sesión</h1>
        <img
          class="image"
          src="../Imag/cerrar-con-llave.png"
          alt="Inicio de Sesión" />
      </div>
      <form action="login.php" method="POST">
        <div class="login-form">
          <div class="control-group">
            <input
              type="text"
              class="login-field"
              value=""
              placeholder="Usuario"
              name="login-name" />
            <label class="login-field-icon fui-user" for="login-name"></label>
          </div>

          <div class="control-group">
            <input
              type="password"
              class="login-field"
              value=""
              placeholder="Contraseña"
              name="login-pass" />
            <label class="login-field-icon fui-lock" for="login-pass"></label>
          </div>
          <button class="btn btn-dark btn-large btn-block">Login</button>

      </form>
      <a class="btn_inic btn-dark btn-large btn-block" href="../Templates/index.php">Inicio</a>
    </div>
  </div>
  </div>
</body>

</html>