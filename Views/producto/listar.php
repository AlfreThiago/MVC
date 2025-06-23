<?require_once("config/conexion.php");?>
    
<header>
    <h2>Lista de Productos</h2>
    <a href="usuarioIndex.php">Usuarios</a>
</header>

<br>
<a href="index.php?accion=crear">Crear nuevo producto</a> 

<?php foreach ($resultados as $p): ?>

<p>

    <?= $p['nombre'] ?> - $<?= $p['precio'] ?>

    <a href="index.php?accion=editar&id=<?= $p['id'] ?>">Editar</a>

    <a href="index.php?accion=borrar&id=<?= $p['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar este producto?');">Eliminar</a> 

</p>

<?php endforeach; ?>
