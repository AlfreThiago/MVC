<?php
if(isset('post')){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    echo "Producto guardado";
}
?>
<form method="post" action="">
    Nombre: <input type="text" name="nombre">
    Precio: <input type="number" step="0.01" name="precio">
</form>