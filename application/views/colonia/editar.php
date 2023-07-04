<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach($colonias as $n): ?>
<form action="<?=base_url();?>index.php/colonia/modificar" method="post">
    <input type="hidden" name="idColonia" id="idColonia"  value="<?=$n -> $idColonia?>">
    <label for="colonia">Colonia</label>
    <input type="text" name="colonia" id="colonia" placeholder="Colonia" value="<?=$n -> $colonia?>">
    <label for="Ciudad_idCiudad">Ciudad</label>
        <select name="Ciudad_idCiudad" id="Ciudad_idCiudad">
            <?php foreach($ciudades as $d): ?>
            <option value="<?=$d -> idCiudad;?>"
                <?php if ($d ->  idCiudad = $p -> Ciudad_idCiudad) {
                    echo "SELECTED";
                }?>
            >
                <?=$d -> ciudad;?>;?>
            </option>
            <?php endforeach; ?>
        </select>
    <button type="submit">Modificar</button>
</form>
<?php endforeach; ?>