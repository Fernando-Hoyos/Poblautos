<?php
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

require_once('inicio.php');

require_once '../Templates/' . $pagina . '.php';
