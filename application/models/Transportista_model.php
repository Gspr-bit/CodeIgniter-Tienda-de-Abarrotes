<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportista_model extends CI_Model
{
    private $_idTransportista;
    private $_empresa;
    private $_telefono;

    function __construct()
    {
        parent::__construct();
    }

    public function get_idTransportista()
    {
    return $this->_idTransportista;
    }   

    public function set_idTransportista($_idTransportista)
    {
        $this->_idTransportista = $_idTransportista;
    }

    public function get_empresa(){
    return $this->_empresa;
    }
    
    public function set_empresa($_empresa)
    {
        $this->_empresa = $_empresa;
    }

    public function get_telefono(){
        return $this->_telefono;
    }
        
    public function set_telefono($_telefono)
    {
        $this->_telefono = $_telefono;
    }

    
    
    public function agregarTransportista()
    {
        $data = array(
            'idTransportista'  =>$this->_idTransportista,
            'empresa'    => $this->_empresa,
            'telefono'    => $this->_telefono
        );
        $this->db->insert('Transportista', $data);
    }
    
    public function borrarTransportista(){
        $this->db->where('idTransportista', $this->_idTransportista);
        $this->db->delete('Transportista');
    }

    public function listar()
    {
                       
        $respuesta = $this->db->get("Transportista");
        return $respuesta->result(); //Genera objeto con atributos
    }
    
    public function modificarTransportista()
    {
        $data = array(
            'idTransportista'       => $this->_idTransportista,
            'empresa'   => $this->_empresa,
            'telefono'       => $this->_telefono
            
        );
        $this->db->where('idTransportista', $this->_idTransportista);
        $this->db->update('Transportista', $data);
    }
}