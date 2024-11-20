<?php
//Solicitar la conexion de la BD 
include '../Includes/conecta.php';
include '../Includes/graficos.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Compacto</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../Styles/tablero.css">
</head>

<body>
    <div class="dashboard">
        <!-- Total Income Card -->
        <div class="card income-highlight">
            <h2>Total de Ingresos</h2>
            <p>$<?php echo number_format($totalIngresos, 2); ?></p>
        </div>

        <!-- Top Sales Branch -->
        <div class="card sales-highlight">
            <h2>Sucursal con Más Ventas</h2>
            <p><?php echo $sucursalMayorVentas; ?> (<?php echo $totalVentas; ?> ventas)</p>
        </div>

        <!-- Monthly Sales Chart -->
        <div class="chart-container">
            <h3>Ingresos por Mes</h3>
            <canvas id="chartIngresosPorMes"></canvas>
        </div>

        <!-- Daily Sales Chart -->
        <div class="chart-container">
            <h3>Ventas Diarias</h3>
            <canvas id="chartVentasDiarias"></canvas>
        </div>

        <!-- Average Car Price Chart -->
        <div class="chart-container">
            <h3>Promedio Precio de Autos</h3>
            <canvas id="chartPromedioPrecioAutos"></canvas>
        </div>

        <!-- Cars Sold by Brand Chart -->
        <div class="chart-container">
            <h3>Autos Vendidos por Marca</h3>
            <canvas id="chartAutosVendidosPorMarca"></canvas>
        </div>

        <!-- Sales by Brand Chart -->
        <div class="chart-container">
            <h3>Ventas por Marca</h3>
            <canvas id="chartVentasPorMarca"></canvas>
        </div>

        <!-- Best Clients Chart -->
        <div class="chart-container">
            <h3>Mejores Clientes</h3>
            <canvas id="chartMejoresClientes"></canvas>
        </div>
    </div>

    <script>
        // Datos generados por PHP
        const mesesJSON = <?php echo $mesesJSON; ?>;
        const ingresosPorMesJSON = <?php echo $ingresosPorMesJSON; ?>;
        const diasJSON = <?php echo $diasJSON; ?>;
        const ventasDiariasJSON = <?php echo $ventasDiariasJSON; ?>;
        const marcasPromedioJSON = <?php echo $marcasPromedioJSON; ?>;
        const promedioPreciosJSON = <?php echo $promedioPreciosJSON; ?>;
        const marcasJSON = <?php echo $marcasJSON; ?>;
        const totalVendidosJSON = <?php echo $totalVendidosJSON; ?>;
        const ventasPorMarcaJSON = <?php echo $ventasPorMarcaJSON; ?>;
        const clientesJSON = <?php echo $clientesJSON; ?>;
        const totalComprasJSON = <?php echo $totalComprasJSON; ?>;

        // Configuración de gráficas
        new Chart(document.getElementById('chartIngresosPorMes'), {
            type: 'line',
            data: {
                labels: mesesJSON,
                datasets: [{
                    label: 'Ingresos por Mes',
                    data: ingresosPorMesJSON,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(document.getElementById('chartVentasDiarias'), {
            type: 'line',
            data: {
                labels: diasJSON,
                datasets: [{
                    label: 'Ventas Diarias',
                    data: ventasDiariasJSON,
                    borderColor: 'rgba(153, 102, 255, 1)',
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(document.getElementById('chartPromedioPrecioAutos'), {
            type: 'doughnut',
            data: {
                labels: marcasPromedioJSON,
                datasets: [{
                    label: 'Promedio Precio de Autos ($)',
                    data: promedioPreciosJSON,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                responsive: true
            }
        });

        new Chart(document.getElementById('chartAutosVendidosPorMarca'), {
            type: 'pie',
            data: {
                labels: marcasJSON,
                datasets: [{
                    label: 'Autos Vendidos',
                    data: totalVendidosJSON,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                responsive: true
            }
        });

        new Chart(document.getElementById('chartVentasPorMarca'), {
            type: 'bar',
            data: {
                labels: marcasJSON,
                datasets: [{
                    label: 'Ventas por Marca',
                    data: ventasPorMarcaJSON,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        new Chart(document.getElementById('chartMejoresClientes'), {
            type: 'bar',
            data: {
                labels: clientesJSON,
                datasets: [{
                    label: 'Mejores Clientes',
                    data: totalComprasJSON,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false // Esto oculta la leyenda
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>