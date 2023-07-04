<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url();?>index.php/producto/agregar" method="post">
    <label for="nombreProducto"></label>
    <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Producto">
    <br>
    <label for="imagenProducto"></label>
    <input type="file" name="imagenProducto" id="imagenProducto" placeholder="Imagen">
    <br>
    <label for="cantidadPorUnidad"></label>
    <input type="text" name="cantidadPorUnidad" id="cantidadPorUnidad" placeholder="Cantidad">
    <br>
    <label for="precioUnitario"></label>
    <input type="text" name="precioUnitario" id="precioUnitario" placeholder="Precio">
    <br>
    <label for="existencia"></label>
    <input type="text" name="existencia" id="existencia" placeholder="Existencia">
    <br>
    <label for="nombredescontinuado"></label>
    <input type="text" name="nombredescontinuado" id="nombredescontinuado" placeholder="Descontinuado">
    <br>
    <select name="Categoria_idCategoria" id="Categoria_idCategoria">
        <?php foreach($categorias as $c): ?>
        <option value="<?=$c->idCategoria;?>">
            <?=$c->nombreCategoria;?>
        </option>
        <?php endforeach; ?>
    </select>
    <br>
    <select name="Proveedor_idProveedor" id="Proveedor_idProveedor">
        <?php foreach($proveedores as $p): ?>
        <option value="<?=$p->idProveedor;?>">
            <?=$p->empresa;?>, <?=$p->contacto;?>
        </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Agregar</button>
</form>
    