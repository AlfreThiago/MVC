<h2>Editar Usuario</h2>
<form method="POST" action="index.php?accion=actualizar">
<input type="hidden" name="id" value="<?= $datos['id'];?>">
Nombre: <input type="text" name="nombre"  value="<?= $datos['nombre'] ; ?>"><br>
Contraseña: <input type="text" name="contraseña" value="<?= $datos['contraseña'];?>"><br> 
<input type="submit" value="Guardar cambios">
</form>