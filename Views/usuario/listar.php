<?
require_once("config/conexion.php");
?>

<header>
    <h2>Lista de Usuarios</h2>
    <a href="Index.php">Productos</a>
</header>

<br>
<a href="usuarioIndex.php?accion=crear">Crear nuevo Usuario</a>

<?php foreach ($resultados as $p): ?>

<p>

    <?= $p['nombre'] ?> - $<?= $p['email'] ?>

    <a href="index.php?accion=editar&id=<?= $p['id'] ?>">Editar</a>

    <a href="index.php?accion=borrar&id=<?= $p['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar este producto?');">Eliminar</a> 

</p>

<?php endforeach; ?>
