<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url();?>index.php/Proveedor/agregar" method="post">
    <label for="empresa">Empresa</label>
    <input type="text" name="empresa" id="empresa">
    <label for="contacto">Contacto</label>
    <input type="text" name="contacto" id="contacto">
    <label for="tituloContacto">Título del contacto</label>
    <input type="text" name="tituloContacto" id="tituloContacto">
    <label for="fax">Fax</label>
    <input type="text" name="fax" id="fax">
    <label for="sitioWeb">Sitio web</label>
    <input type="text" name="sitioWeb" id="sitioWeb">
    <label for="Direccion_idDireccion">Dirección</label>
    <select name="Direccion_idDireccion" id="Direccion_idDireccion">
        <?php foreach($direcciones as $d): ?>
        <option value="<?=$d -> idDireccion;?>"><?=$d -> calle;?>, <?=$d -> numinterior;?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Agregar</button>
</form>