<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->model('Categoria_model');
        $this->load->model('Proveedor_model');
    }

    public function index()
    {
        $data['productos']  = $this->Producto_model->listar();
        $data['contenido']  = 'producto/listar';
        $this->load->view('administrador/plantilla'.$data);
    }

    public function agregar()
    {
        $this->Producto_model->set_idProducto(0);
        $this->Producto_model->set_nombreProducto($this->input->post('nombreProducto'));
        $this->Producto_model->set_imagenProducto($datosImagen['file_name']);
        $this->Producto_model->set_cantidadPorUnidad($this->input->post('cantidadPorUnidad'));
        $this->Producto_model->set_precioUnitario($this->input->post('precioUnitario'));
        $this->Producto_model->set_existencia($this->input->post('existencia'));
        $this->Producto_model->set_descontinuado($this->input->post('descontinuado'));
        $this->Producto_model->set_Categoria_idCategoria($this->input->post('Categoria_idCategoria'));
        $this->Producto_model->set_Proveedor_idProveedor($this->input->post('Proveedor_idProveedor'));

        $this->Producto_model->agregarProducto();
        $this->index();
    }

    public function borrar($_idProducto)
    {
        $this->Producto_model->set_idProducto($_idProducto);
        $this->Producto_model->borrarProducto();
    }

    public function editar($_idProducto)
    {
        $this->Producto_model->set_idProducto($_idProducto);
        $data['producto'] = $this->Producto_model->listar();
        $this->load->view('producto/editar',$data);
    }

    public function modificar()
    {
        $this->Producto_model->set_idProducto($this->input->post('idProducto'));
        $this->Producto_model->set_nombreProducto($this->input->post('nombreProducto'));
        $this->Producto_model->set_imagenProducto($this->input->post('imagenProducto'));
        $this->Producto_model->set_cantidadPorUnidad($this->input->post('cantidadPorUnidad'));
        $this->Producto_model->set_precioUnitario($this->input->post('precioUnitario'));
        $this->Producto_model->set_existencia($this->input->post('existencia'));
        $this->Producto_model->set_descontinuado($this->input->post('descontinuado'));
        $this->Producto_model->set_Categoria_idCategoria($this->input->post('Categoria_idCategoria'));
        $this->Producto_model->set_Proveedor_idProveedor($this->input->post('Proveedor_idProveedor'));

        $this->Producto_model->modificarProducto();
        $this->index();
    }

    public function nuevo()
    {
        $data['categorias']  = $this->Categoria_model->listar();
        $data['proveedores'] = $this->Proveedor_model->listar();
        $data['contenido']   = 'producto/nuevo';
        $this->load->view('administrador/plantilla',$data);
    }
}