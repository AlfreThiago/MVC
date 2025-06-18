<?php
require_once('config/conexion.php');
class Usuario {
    private $db;

    public function __construct() {
    $this->db=conectar();
    }
    public function crear($nombre,$contrasena){
        $sql="INSERT INTO usuarios (nombre, contrasena) VALUES ('$nombre','$contrasena')";
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
    public function actualizar($id,$nombre,$contrasena){
        $sql="UPDATE usuarios SET nombre='$nombre', contrasena='$contrasena' WHERE id=$id";
        return $this->db->query($sql);
    }
    public function buscarPorId($id){
        $sql="SELECT*FROM usuarios WHERE id=$id";
        return $this->query($sql)->fetch_assoc();
    }
}
?>