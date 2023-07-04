<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Vanessa López Rangel
 */

class Pedido extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pedido_model');
        $this->load->model('Direccion_model');
        $this->load->model('Transportista_model');
        $this->load->model('Empleado_model');
    }

    public function index()
    {
        $data['pedidos'] = $this->Pedido_model->listar();
        $data['contenido'] = 'pedido/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
        $this->Pedido_model->set_idPedido(null);
        $this->Pedido_model->set_fechaPedido( $this->input->post('fechaPedido') );
        $this->Pedido_model->set_fechaEntrega( $this->input->post('fechaEntrega') );
        $this->Pedido_model->set_fechaEmbarque( $this->input->post('fechaEmbarque') );
        $this->Pedido_model->set_peso( $this->input->post('peso') );
        $this->Pedido_model->set_totalPedido( $this->input->post('totalPedido') );
        $this->Pedido_model->setDireccion_idDireccion( $this->input->post('Direccion_idDireccion') );
        $this->Pedido_model->setTransportista_idTransportista( $this->input->post('Transportista_idTransportista') );
        $this->Pedido_model->setEmpleado_idEmpleado( $this->input->post('Empleado_idEmpleado') );
        
        $this->Pedido_model->agregarPedido();
    }

    public function editar($_idPedido = null)
    {
        if($_idPedido == null){
            //Agregar
        }else{
            $this->Pedido_model->set_idPedido($_idPedido);
        }

        $data['pedidos'] = $this->Pedido_model->listar();

        $data['direcciones'] = $this->Direccion_model->listar();
        $data['transportistas'] = $this->Transportista_model->listar();
        $data['empleados'] = $this->Empleado_model->listar();
        $data['contenido'] = 'pedido/editar';
        $this->load->view('pedido/editar', $data);
    }

    public function eliminar($_idPedido)
    {
        $this->Pedido_model->set_idPedido($_idPedido);
        $this->Pedido_model->eliminarPedido();
    }

    public function modificar()
    {
        $this->Pedido_model->set_idPedido($this->input->post('idPedido') );
        $this->Pedido_model->set_fechaPedido( $this->input->post('fechaPedido') );
        $this->Pedido_model->set_fechaEntrega( $this->input->post('fechaEntrega') );
        $this->Pedido_model->set_fechaEmbarque( $this->input->post('fechaEmbarque') );
        $this->Pedido_model->set_peso( $this->input->post('peso') );
        $this->Pedido_model->set_totalPedido( $this->input->post('totalPedido') );
        $this->Pedido_model->setDireccion_idDireccion( $this->input->post('Direccion_idDireccion') );
        $this->Pedido_model->setTransportista_idTransportista( $this->input->post('Transportista_idTransportista') );
        $this->Pedido_model->setEmpleado_idEmpleado( $this->input->post('Empleado_idEmpleado') );
        
        $this->Pedido_model->agregarPedido();
    }

    public function nuevo()
    {
        $data['direcciones'] = $this->Direccion_model->listar();
        $data['transportistas'] = $this->Transportista_model->listar();
        $data['empleados'] = $this->Empleado_model->listar();
        $data['contenido'] = 'pedido/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }
}