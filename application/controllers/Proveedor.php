<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this -> load -> model('Proveedor_model');
        $this -> load -> model('Direccion_model');
    }

    public function index()
    {
        $data['proveedores']    = $this -> Proveedor_model -> listar();
        $data['contenido']      = 'proveedor/listar';
        $this -> load -> view('administrador/plantilla'.$data);
    }

    public function agregar()
    {
        $this -> Proveedor_model -> set_idProveedor(0);
        $this -> Proveedor_model -> set_empresa($this -> input -> post('empresa'));
        $this -> Proveedor_model -> set_contacto($this -> input -> post('contacto'));
        $this -> Proveedor_model -> set_tituloContacto($this -> input -> post('tituloContacto'));
        $this -> Proveedor_model -> set_fax($this -> input -> post('fax'));
        $this -> Proveedor_model -> set_sitioWeb($this -> input -> post('sitioWeb'));
        $this -> Proveedor_model -> set_Direccion_idDireccion($this -> input -> post('Direccion_idDireccion'));

        $this -> Proveedor_model -> agregarProveedor();
        $this -> index();
    }

    public function borrar($_idProveedor)
    {
        $this -> Proveedor_model -> set_idProveedor($_idProveedor);
        $this -> Proveedor_model -> borrarProveedor();
    }

    public function editar($_idProveedor)
    {
        $this -> Proveedor_model -> set_idProveedor($_idProveedor);
        $data['direcciones']    = $this -> Direccion_model -> listar();
        $data['proveedor']      = $this -> Proveedor_model -> listar();
        $data['contenido']      = 'proveedor/editar';
        $this -> load -> view('administrador/plantilla',$data);
    }

    public function modificar()
    {
        $this -> Proveedor_model -> set_idProveedor(0);
        $this -> Proveedor_model -> set_empresa($this -> input -> post('empresa'));
        $this -> Proveedor_model -> set_contacto($this -> input -> post('contacto'));
        $this -> Proveedor_model -> set_tituloContacto($this -> input -> post('tituloContacto'));
        $this -> Proveedor_model -> set_fax($this -> input -> post('fax'));
        $this -> Proveedor_model -> set_sitioWeb($this -> input -> post('sitioWeb'));
        $this -> Proveedor_model -> set_Direccion_idDireccion($this -> input -> post('Direccion_idDireccion'));

        $this -> Proveedor_model -> modificarProveedor();
        $this -> index();
    }

    public function nuevo()
    {
        $data['contenido'] = 'proveedor/nuevo';
        $data['direcciones'] = $this -> Direccion_model -> listar();
        $this -> load -> view('administrador/plantilla',$data);
    }
}