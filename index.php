<?php
require_once("controllers/ProductoController.php");
$controller=new ProductoController();

$accion=$_GET['accion'] ?? 'index';

if($accion=='editar'){
    $controller->editar();
} elseif ($accion=='actualizar'){
    $controller->actualizar();
} else {
    $controller->index();
}
?>