<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach($productos as $p): ?>
<form action="<?=base_url();?>index.php/producto/modificar" method="post">
    <input type="hidden" name="idProducto" id="idProducto"  value="<?=$p->$idProducto?>">
    <br>
    <label for="nombreProducto">Producto</label>
    <input type="text" name="nombreProducto" id="Producto" placeholder="nombreProducto" value="<?=$p->$nombreProducto?>">
    <br>
    <label for="imagenProducto">Imagen</label>
    <input type="file" name="imagenProducto" id="imagenProducto" placeholder="Imagen">
    <br>
    <label for="precioUnitario">Precio</label>
    <input type="text" name="precioUnitario" id="precioUnitario" placeholder="Precio" value="<?=$p->$precioUnitario?>">
    <br>
    <label for="existencia">Existencia</label>
    <input type="text" name="existencia" id="existencia" placeholder="Existencia" value="<?=$p->$existencia?>">
    <br>
    <label for="descontinuado">Descontinuado</label>
    <input type="text" name="descontinuado" id="descontinuado" placeholder="Descontinuado" value="<?=$p->$precioUnitario?>">
    <br>
    <select name="Categoria_idCategoria" id="Categoria_idCategoria">
        <?php foreach($categorias as $c): ?>
        <option value="<?=$c->idCategoria;?>"
            <?php if ($c->idCategoria = $u->Categoria_idCategoria) {
                echo "SELECTED";
            }?>
        >
            <?=$c->nombreCategoria;?>
        </option>
        <?php endforeach; ?>
    </select>
    <br>
    <select name="Proveedor_idProveedor" id="Proveedor_idProveedor">
        <?php foreach($proveedores as $p): ?>
        <option value="<?=$p->idProveedor;?>"
            <?php if ($p->idProveedor = $u->Proveedor_idProveedor) {
                echo "SELECTED";
            }?>
        >
            <?=$p->empresa;?>, <?=$p->contacto;?>
        </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Agregar</button>
</form>
<?php endforeach; ?>