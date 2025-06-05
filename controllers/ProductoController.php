<?php
require_once("models/Producto.php");

class ProductoController {
    public function index(){
        $producto= new Producto();
        $resultados=$producto->listar();
        include("views/producto/listar.php");
    }
}
?>