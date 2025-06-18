<h2>Lista de Usuarios</h2>
<?php foreach ($resultados as $u): ?>
    <p><?=$u['nombre']?>-$<?=$u['contraseña']?>
<a href="index.php?accion=editar&id=<?=$u['id']?>">
</p>
    <?php endforeach;?>