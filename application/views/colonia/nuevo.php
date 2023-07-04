<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url();?>index.php/colonia/agregar" method="post">
    <label for="colonia"></label>
    <input type="text" name="colonia" id="colonia" placeholder="Colonia">
    <label for="Ciudad_idCiudad">Ciudad</label>
    <select name="Ciudad_idCiudad" id="Ciudad_idCiudad">
        <?php foreach($ciudades as $d): ?>
        <option value="<?=$d -> idCiudad;?>"><?=$d -> ciudad;?>;?></option>
        <?php endforeach; ?>
    </select>
    <button type="submit">Agregar</button>
</form>
