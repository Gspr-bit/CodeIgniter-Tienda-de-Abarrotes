<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach($proveedores as $p): ?>
<form action="<?=base_url();?>index.php/Proveedor/modificar" method="post">
    <label for="empresa">Empresa</label>
    <input type="text" name="empresa" id="empresa" value="<?=$p -> empresa;?>">
    <label for="contacto">Contacto</label>
    <input type="text" name="contacto" id="contacto" value="<?=$p -> contacto;?>">
    <label for="tituloContacto">Título del contacto</label>
    <input type="text" name="tituloContacto" id="tituloContacto" value="<?=$p -> tituloContacto;?>">
    <label for="fax">Fax</label>
    <input type="text" name="fax" id="fax" value="<?=$p -> fax;?>">
    <label for="sitioWeb">Sitio web</label>
    <input type="text" name="sitioWeb" id="sitioWeb" value="<?=$p -> sitioWeb;?>">
    <label for="Direccion_idDireccion">Dirección</label>
    <select name="Direccion_idDireccion" id="Direccion_idDireccion">
        <?php foreach($direcciones as $d): ?>
        <option value="<?=$d -> idDireccion;?>"
            <?php if ($d ->  idDireccion = $p -> Direccion_idDireccion) {
                echo "SELECTED";
            }?>
        >
            <?=$d -> calle;?>, <?=$d -> numinterior;?>
        </option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Modificar</button>
</form>
<?php endforeach; ?>