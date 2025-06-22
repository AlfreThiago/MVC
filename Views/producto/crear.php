<?
    require_once("config/conexion.php");
?>
<h2>Crear Producto</h2>
    
<form method="POST" action="index.php?accion=guardar">
        
    Nombre: <input type="text" name="nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ\s]+" title="Solo se permiten letras y espacios" required><br>
        
    Precio: <input type="number" name="precio"><br>
        
    <input type="submit" value="Guardar">

</form>