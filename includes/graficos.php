<?php
include("conecta.php");

// Consulta para obtener la cantidad de autos vendidos por mes
$query = "SELECT MONTH(Fecha) AS mes, 
        COUNT(*) AS total_vendidos
    FROM ventas
    WHERE YEAR(Fecha) = YEAR(CURDATE()) -- Año actual
    GROUP BY MONTH(Fecha)
    ORDER BY mes ASC
";

$result = $conecta->query($query);

// Inicializamos arrays para almacenar los datos
$meses = [];
$valores = [];

// Procesamos los resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $meses[] = obtenerNombreMes($row['mes']); // Convertir número de mes a nombre
        $valores[] = $row['total_vendidos'];
    }
}

// Convertir los arrays a JSON para Chart.js
$mesesJSON = json_encode($meses);
$valoresJSON = json_encode($valores);

// Función para convertir número de mes a nombre del mes
function obtenerNombreMes($numeroMes)
{
    $nombresMeses = [
        1 => "Enero",
        2 => "Febrero",
        3 => "Marzo",
        4 => "Abril",
        5 => "Mayo",
        6 => "Junio",
        7 => "Julio",
        8 => "Agosto",
        9 => "Septiembre",
        10 => "Octubre",
        11 => "Noviembre",
        12 => "Diciembre"
    ];
    return $nombresMeses[$numeroMes] ?? "Desconocido";
}

// Imprimir los resultados para verificar (opcional)
//echo "Meses: $mesesJSON<br>";
//echo "Valores: $valoresJSON<br>";

// Consulta para obtener las ventas totales por marca de autos
$query = "SELECT 
        autos.Marca, 
        COUNT(ventas.ID_venta) AS total_ventas 
    FROM ventas
    JOIN autos ON ventas.ID_auto = autos.ID_auto
    GROUP BY autos.Marca
    ORDER BY total_ventas DESC;
";

$result = $conecta->query($query);

$marcas = [];
$ventasPorMarca = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $marcas[] = $row['Marca'];
        $ventasPorMarca[] = $row['total_ventas'];
    }
}

$marcasJSON = json_encode($marcas);
$ventasPorMarcaJSON = json_encode($ventasPorMarca);

// Consulta para obtener los ingresos mensuales del año actual
$query = "SELECT 
        MONTH(ventas.Fecha) AS mes, 
        SUM(autos.Precio) AS total_ingresos 
    FROM ventas
    JOIN autos ON ventas.ID_auto = autos.ID_auto
    WHERE YEAR(ventas.Fecha) = YEAR(CURDATE())
    GROUP BY MONTH(ventas.Fecha)
    ORDER BY mes;
";

$result = $conecta->query($query);

$meses = [];
$ingresosPorMes = [];

while ($row = $result->fetch_assoc()) {
    $meses[] = obtenerNombreMes($row['mes']);
    $ingresosPorMes[] = $row['total_ingresos'];
}

$mesesJSON = json_encode($meses);
$ingresosPorMesJSON = json_encode($ingresosPorMes);

// Consulta para obtener los 10 clientes con más compras
$query = "SELECT 
        CONCAT(clientes.Nombre, ' ', clientes.Apellido) AS cliente, 
        COUNT(ventas.ID_venta) AS total_compras 
    FROM ventas
    JOIN clientes ON ventas.ID_cliente = clientes.ID_cliente
    GROUP BY clientes.ID_cliente
    ORDER BY total_compras DESC
    LIMIT 10;
";

$result = $conecta->query($query);

$clientes = [];
$totalCompras = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $clientes[] = $row['cliente'];
        $totalCompras[] = $row['total_compras'];
    }
}

$clientesJSON = json_encode($clientes);
$totalComprasJSON = json_encode($totalCompras);

// Consulta para obtener las ventas diarias en los últimos 7 días
$query = "SELECT 
        DATE(ventas.Fecha) AS dia, 
        COUNT(ventas.ID_venta) AS total_ventas
    FROM ventas
    WHERE ventas.Fecha >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)
    GROUP BY DATE(ventas.Fecha)
    ORDER BY dia ASC;
";

$result = $conecta->query($query);

$dias = [];
$ventasDiarias = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dias[] = $row['dia'];
        $ventasDiarias[] = $row['total_ventas'];
    }
}

$diasJSON = json_encode($dias);
$ventasDiariasJSON = json_encode($ventasDiarias);

// Consulta para obtener los ingresos totales de todas las ventas
$query = "SELECT SUM(autos.Precio) AS total_ingresos FROM ventas JOIN autos ON ventas.ID_auto = autos.ID_auto;";
$result = $conecta->query($query);

$totalIngresos = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalIngresos = $row['total_ingresos'];
}

// Consulta para obtener las ventas totales por marca, ordenadas por cantidad
$query = "    SELECT autos.Marca AS marca, COUNT(ventas.ID_venta) AS total_vendidos
    FROM autos
    JOIN ventas ON autos.ID_auto = ventas.ID_auto
    GROUP BY autos.Marca
";

$result = $conecta->query($query);

$marcas = [];
$totalVendidos = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $marcas[] = $row['marca'];
        $totalVendidos[] = $row['total_vendidos'];
    }
}

// Convertimos los arrays a JSON para pasarlos a JavaScript
$marcasJSON = json_encode($marcas);
$totalVendidosJSON = json_encode($totalVendidos);


// Consulta para obtener la sucursal con mayor número de ventas
$query = "  SELECT sucursales.Ciudad AS sucursal, COUNT(ventas.ID_venta) AS total_ventas 
    FROM ventas
    JOIN sucursales ON ventas.ID_sucursal = sucursales.ID_sucursal
    GROUP BY sucursales.ID_sucursal
    ORDER BY total_ventas DESC
    LIMIT 1;
";

$result = $conecta->query($query);

$sucursalMayorVentas = "No disponible";
$totalVentas = 0;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $sucursalMayorVentas = $row['sucursal'];
    $totalVentas = $row['total_ventas'];
}

// Consulta para calcular el precio promedio por marca de autos
$query = "    SELECT autos.Marca, AVG(autos.Precio) AS promedio_precio 
    FROM ventas
    JOIN autos ON ventas.ID_auto = autos.ID_auto
    GROUP BY autos.Marca;
";

$result = $conecta->query($query);

$marcasPromedio = [];
$promedioPrecios = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $marcasPromedio[] = $row['Marca'];
        $promedioPrecios[] = $row['promedio_precio'];
    }
}

$marcasPromedioJSON = json_encode($marcasPromedio);
$promedioPreciosJSON = json_encode($promedioPrecios);
