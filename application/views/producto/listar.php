<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Imagen</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Existencia</th>
            <th>Descontinuado</th>
            <th>Categoria_idCategoria</th>
            <th>Proveedor_idProveedor</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($productos as $p): ?>
            <td><?=$p->idProducto?></td>
            <td><?=$p->nombreProducto?></td>
            <td><img src="fotos/<?=$p->imagenProducto?>"></td>
            <td><?=$p->cantidadPorUnidad?></td>
            <td><?=$p->precioUnitario?></td>
            <td><?=$p->existencia?></td>
            <td><?=$p->descontinuado?></td>
            <td><?=$p->Categoria_idCategoria?></td>
            <td><?=$p->Proveedor_idProveedor?></td>
            <td><a href="<?=base_url();?>index.php/producto/editar/<?=$p->idProducto?>">Editar</a></td>
            <td><a href="<?=base_url();?>index.php/producto/borrar/<?=$p->idProducto?>">Borrar</a></td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>