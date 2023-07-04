<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Empresa</th>
            <th>Contacto</th>
            <th>Título del contacto</th>
            <th>Fax</th>
            <th>Sitio Web</th>
            <th>Direccion_idDireccion</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($proveedores as $p): ?>
            <td><?=$p -> idProveedor;?></td>
            <td><?=$p -> empresa;?></td>
            <td><?=$p -> contacto;?></td>
            <td><?=$p -> tituloContacto;?></td>
            <td><?=$p -> fax;?></td>
            <td><?=$p -> sitioWeb;?></td>
            <td><?=$p -> Direccion_idDireccion;?></td>
            <td><a href="<?=base_url();?>index.php/proveedor/editar/<?=$p -> idProveedor;?>">Editar</a></td>
            <td><a href="<?=base_url();?>index.php/proveedor/borrar/<?=$p -> idProveedor;?>">Borrar</a></td>
        <?php endforeach; ?>
        </tr>
    </tbody>
</table>            