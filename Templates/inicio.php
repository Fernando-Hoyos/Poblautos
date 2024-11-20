<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Styles/inicio.css" />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="../Imag/Logo-P.png" type="image/x-icon" />
    <title>PoblAutos</title>
</head>

<body>
    <section class="container">
        <div class="sidebar">
            <img src="../Imag/Logo.png" alt="" />
            <ul>
                <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>"><a href="?p=inicio">Inicio</a></li>
                <li class="<?php echo $pagina == 'form_Ventas' ? 'active' : ''; ?>"><a href="?p=form_Ventas">Registro de Ventas</a></li>
                <li class="<?php echo $pagina == 'list_tabla' ? 'active' : ''; ?>"><a href="?p=list_tabla">Listado de Datos</a></li>
                <li class="<?php echo $pagina == 'tablero' ? 'active' : ''; ?>"><a href="?p=tablero">Tablero</a></li>
                <li><a href="../Templates/index.php">Cerrar Sesión</a></li>
            </ul>
        </div>
    </section>
</body>

</html>