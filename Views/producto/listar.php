<h2>Lista de Producto</h2>
<?php foreach ($resultados as $p): ?>
    <p><?=$p['nombre']?>-$<?=$p['precio']?></p>
    <?php endforeach;?>