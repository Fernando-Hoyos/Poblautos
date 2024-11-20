<?php
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';

require_once('../Templates/inicio.php');

require_once '../Templates/' . $pagina . '.php';
