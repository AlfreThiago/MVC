<?require_once("config/conexion.php");?>
    
<h2>Editar Producto</h2>

<form method="POST" action="index.php?accion=actualizar">
    
    <input type="hidden" name="id" value="<?= $datos['id'] ?>">
        
    Nombre: <input type="text" name="nombre" value="<?= $datos['nombre'] ?>"><br>
        
    Precio: <input type="number" name="precio" value="<?= $datos['precio'] ?>"><br>
       
    <input type="submit" value="Guardar cambios">

</form>