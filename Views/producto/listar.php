<h2>Lista de Producto</h2>
<?php foreach ($resultados as $p): ?>
    <p><?=$p['nombre']?>-$<?=$p['precio']?>
<a href="index.php?accion=editar&id=<?=$p['id']?>">
</p>
    <?php endforeach;?>