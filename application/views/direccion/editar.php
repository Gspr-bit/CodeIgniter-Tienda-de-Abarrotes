<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <form action="" method="post">
        <label for="calle"></label>
        <input type="text" name="calle" id="calle" placeholder="calle">
        <br>
        <label for="numInterior"></label>
        <input type="text" name="numInterior" id="numInterior" placeholder="numInterior">
        <br>
        <label for="numExterior"></label>
        <input type="text" name="numExterior" id="numExterior" placeholder="numExterior">
        <br>
        <label for="Colonia_idColonia"></label>
            <select name="Colonia_idColonia" id="Colonia_idColonia"></select>
        <br>
        <button type="submit">Editar</button>
    </form>