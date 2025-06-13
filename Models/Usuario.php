<?php
require_once('config/conexion.php');
class Usuario {
    private $db;

    public function __construct() {
    $this->db=conectar();
    }
    public function crear($nombre,$precio){
        $sql="INSERT INTO usuarios (nombre, precio) VALUES ('$nombre','$precio')";
        return $this->db->query($sql);
    }
    public function borrar($id){
        $sql="DELETE FROM usuarios WHERE id=$id";
        return $this->db->query($sql);
    }
    public function listar(){
        $sql="SELECT*FROM usuarios";
        return $this->db->query($sql);
    }
    public function actualizar($id,$nombre,$precio){
        $sql="UPDATE usuarios SET nombre='$nombre', precio='$precio' WHERE id=$id";
        return $this->db->query($sql);
    }
    public function buscarPorId($id){
        $sql="SELECT*FROM usuarios WHERE id=$id";
        return $this->query($sql)->fetch_assoc();
    }
}
?>