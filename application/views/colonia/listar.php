<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Colonia</th>
            <th>Ciudad_idCiudad</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <?php foreach($colonias as $n): ?>
            <td><?=$n -> idColonia?></td>
            <td><?=$n -> colonia?></td>
            <td><?=$n -> Ciudad_idCiudad?></td>
            <td><a href="<?=base_url();?>index.php/colonia/editar/<?=$n -> idColonia?>">Editar</a></td>
            <td><a href="<?=base_url();?>index.php/colonia/borrar/<?=$n -> idColonia?>">Borrar</a></td>
            <?php endforeach; ?>
        </tr>
    </tbody>
</table>