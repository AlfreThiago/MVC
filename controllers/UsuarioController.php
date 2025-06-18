<?php
require_once("models/Usuario.php");

class UsuarioController {
    public function index(){
        $usuario= new Usuario();
        $resultados=$usuario->listar();
        include("views/usuario/listar.php");
    }
    public function crear(){
        include("views/usuario/crear.php")
    }
    public function guardar(){
        $usuario=new Usuario();
        $nombre=$_POST['nombre'];
        $contrasena=$_POST['contrasena'];
        $usuario->crear($nombre, $contrasena);
        header("Location:index.php");
    }
public function editar() {
    $usuario = new Usuario();
    $id = $_GET['id'];
    $datos = $usuario->buscarPorId($id); 
    include("views/usuario/editar.php");
}
public function actualizar() {
$usuario = new Usuario(); 
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$contrasena = $_POST['contrasena'];
$usuario->actualizar($id, $nombre, $contrasena); 
header("Location: index.php");
}
}
?>