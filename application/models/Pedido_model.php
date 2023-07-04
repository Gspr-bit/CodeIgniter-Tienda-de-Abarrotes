<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model
{
    private $_idPedido;
    private $_fechaPedido;
    private $_fechaEntrega;
    private $_fechaEmbarque;
    private $_peso;
    private $_totalPedido;
    private $Direccion_idDireccion;
    private $Transportista_idTransportista;
    private $Empleado_idEmpleado;

    function __construct()
    {
        parent::__construct();
    }

    public function get_idPedido()
    {
        return $this->_idPedido;
    }

    public function set_idPedio($_idPedido)
    {
        $this->_idPedido = $_idPedido;
    }

    public function get_fechaPedido()
    {
        return $this->_fechaPedido;
    }

    public function set_fechaPedio($_fechaPedido)
    {
        $this->_fechaPedido = $_fechaPedido;
    }

    public function get_fechaEntrega()
    {
        return $this->_fechaEntrega;
    }

    public function set_fechaEntrega($_fechaEntrega)
    {
        $this->_fechaEntrega = $_fechaEntrega;
    }

    public function get_fechaEmbarque()
    {
        return $this->_fechaEmbarque;
    }

    public function set_fechaEmbarque($_fechaEmbarque)
    {
        $this->_fechaEmbarque = $_fechaEmbarque;
    }

    public function get_peso()
    {
        return $this->_peso;
    }

    public function set_peso($_peso)
    {
        $this->_peso = $_peso;
    }

    public function get_totalPedido()
    {
        return $this->_totalPedido;
    }

    public function set_totalPedio($_totalPedido)
    {
        $this->_totalPedido = $_totalPedido;
    }

    public function getDireccion_idDireccion()
    {
        return $this->Direccion_idDireccion;
    }

    public function setDireccion_idDireccion($Direccion_idDireccion)
    {
        $this->Direccion_idDireccion = $Direccion_idDireccion;
    }

    public function getTransportista_idTransportista()
    {
    return $this->Transportista_idTransportista;
    }   

    public function setTransportista_idTransportista($Transportista_idTransportista)
    {
        $this->Transportista_idTransportista = $Transportista_idTransportista;
    }

    public function getEmpleado_idEmpleado()
    {
        return $this->Empleado_idEmpleado;
    }

    public function setEmpleado_idEmpleado($Empleado_idEmpleado)
    {
        $this->Empleado_idEmpleado = $Empleado_idEmpleado;
    }

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Pedido');
        $this->db->join('Direccion', 'Direccion_idDireccion = idDireccion');
        $this->db->join('Transportista', 'Transportista_idTransportista = idTransportista');
        $this->db->join('Empleado', 'Empleado_idEmpleado = idEmpleado');

        if($this->_idPedido != null){
            $this->db->where('idPedido', $this->_idPedido);
        }

        $resp = $this->db->get();
        return $resp->result();
    }

    public function agregarPedido()
    {
        $data = array(
            'idPedido'          => $this->_idPedido,
            'fechaPedido'       => $this->_fechaPedido,
            'fechaEntrega'      => $this->_fechaEntrega,
            'fechaEmbarque'     => $this->_fechaEmbarque,
            'peso'              => $this->_peso,
            'totalPedido'       => $this->_totalPedido,
            'Direccion_idDireccion'   => $this->Direccion_idDireccion,
            'Transportista_idTransportista'   => $this->Transportista_idTransportista,
            'Empleado_idEmpleado'   => $this->Empleado_idEmpleado    
        );

        if( $this->_idPedido == null )
        {
            //Agregar
            $this->db->insert('Pedido', $data);
        }else{
            //Modificar
            $this->db->where('idPedido', $this->_idPedido);
            $this->db->update('Pedido', $data);
        }
    }
}