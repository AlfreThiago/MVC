<?php
require_once('config/conexion.php');
class Producto {
    private $db;

    public function __construct() {
    $this->db=conectar();
    }
    public function listar(){
        $sql="SELECT*FROM productos";
        return $this->db->query($sql);
    }
}
?>