<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <form action="" method="post">
        <label for="fechaPedido"></label>
        <input type="text" name="fechaPedido" id="fechaPedido" placeholder="fechaPedido">
        <br>
        <label for="fechaEntrega"></label>
        <input type="text" name="fechaEntrega" id="fechaEntrega" placeholder="fechaEntrega">
        <br>
        <label for="fechaEmbarque"></label>
        <input type="text" name="fechaEmbarque" id="fechaEmbarque" placeholder="fechaEmbarque">
        <br>
        <label for="peso"></label>
        <input type="text" name="peso" id="peso" placeholder="peso">
        <br>
        <label for="totalPedido"></label>
        <input type="text" name="totalPedido" id="totalPedido" placeholder="totalPedido">
        <br>
        <label for="Direccion_idDireccion"></label>
            <select name="Direccion_idDireccion" id="Direccion_idDireccion"></select>
        <label for="Transportista_idTransportista"></label>
            <select name="Transportista_idTransportista" id="Transportista_idTransportista"></select>
        <label for="Empleado_idEmpleado"></label>
            <select name="Empleado_idEmpleado" id="Empleado_idEmpleado"></select>
        <br>
        <button type="submit">Editar</button>
    </form>