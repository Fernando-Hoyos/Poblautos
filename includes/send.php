<?php
include("conecta.php");

if (isset($_POST['send'])) {
    if (
        strlen($_POST['id_cliente']) >= 1 &&
        strlen($_POST['id_sucursal']) >= 1 &&
        strlen($_POST['id_vehiculo']) >= 1 &&
        !empty($_POST['fecha']) // Capturando el input de fecha correctamente
    ) {
        $id_venta = rand(1, 100);
        $id_cliente = trim($_POST['id_cliente']);
        $id_sucursal = trim($_POST['id_sucursal']);
        $id_vehiculo = trim($_POST['id_vehiculo']);
        $fecha = $_POST['fecha']; // Captura el valor del input date

        $consulta = "INSERT INTO ventas(ID_venta, ID_cliente, ID_auto, ID_sucursal, fecha)
                        VALUES ('$id_venta', '$id_cliente', '$id_vehiculo', '$id_sucursal', '$fecha')";

        $resultado = mysqli_query($conecta, $consulta);

        if ($resultado) {
            echo "<h3 class='success'>Tu registro se ha completado</h3>";
        } else {
            echo "<h3 class='error'>Ocurrió un error</h3>";
        }
    } else {
        echo "<h3 class='error'>Llena todos los campos</h3>";
    }
}
