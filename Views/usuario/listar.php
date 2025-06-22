<?
require_once("config/conexion.php");
?>
<link rel="stylesheet" href="css.css">   

<header>
    <h2>Lista de Usuarios</h2>
    <a href="Index.php">Productos</a>
</header>

<br>
<a href="UsuarioI.php?accion=crear">Crear nuevo Usuario</a>

<?php foreach ($resultados as $p): ?>

<p>

    <?= $p['nombre'] ?> - $<?= $p['email'] ?>

    <a href="index.php?accion=editar&id=<?= $p['id'] ?>">Editar</a>

    <a href="index.php?accion=borrar&id=<?= $p['id'] ?>" onclick="return confirm('¿Seguro que quieres borrar este producto?');">Borrar</a> 

</p>

<?php endforeach; ?>