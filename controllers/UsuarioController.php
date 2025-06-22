<?php
require_once("models/Usuario.php");
require_once("config/conexion.php");

class UsuarioController {
    
    public function index() {
        $usuario = new Usuario();
        $resultados = $usuario->listar();
        include("views/usuario/listar.php");
    }
    
    public function crear() {
        include("views/usuario/crear.php");
    }
    
    public function guardar() {
        $usuario = new Usuario();
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $usuario->guardar($nombre, $email);
        header("Location: UsuarioI.php");
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
        $email = $_POST['email'];
        $usuario->actualizar($id, $nombre, $email);
        header("Location: UsuarioI.php");
    }
    
    public function borrar() {
        $usuario = new Usuario();
        $id = $_GET['id'];
        $usuario->borrar($id);
        header("Location: UsuarioI.php");
    }
}
?>