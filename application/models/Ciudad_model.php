<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudad_model extends CI_Model
{
    private $_idCiudad;
    private $_ciudad;
    private $Estado_idEstado;

    function __construct()
    {
        parent::__construct();
    }

    public function get_idCiudad()
    {
        return $this->_idCiudad;
    }

    public function set_idCiudad($_idCiudad)
    {
        $this->_idCiudad = $_idCiudad;
    }

    public function get_ciudad()
    {
        return $this->_ciudad;
    }

    public function set_ciudad($_ciudad)
    {
        $this->ciudad = $_ciudad;
    }

    public function getEstado_idEstado()
    {
        return $this->Estado_idEstado;
    }

    public function setEstado_idEstado($Estado_idEstado)
    {
        $this->Estado_idEstado = $Estado_idEstado;
    }

    public function eliminarCiudad()
    {
        $this->db->where('idCiudad', $this->_idCiudad);
        $this->db->delete('Ciudad');
    }
    

    public function listar()
    {
        //Consulta multitabla
        $this->db->select('*');
        $this->db->from('Ciudad');
        $this->db->join('Estado', 'Estado_idEstado = idEstado');

        if($this->_idCiudad != null){
            $this->db->where('idCiudad', $this->_idCiudad);
        }

        $resp = $this->db->get();
        return $resp->result();
    }

    public function agregarCiudad()
    {
        $data = array(
            'idCiudad'          => $this->_idCiudad,
            'ciudad'            => $this->_ciudad,
            'Estado_idEstado'   => $this->Estado_idEstado    
        );

        if( $this->__idCiudad == null )
        {
            //Agregar
            $this->db->insert('Ciudad', $data);
        }else{
            //Modificar
            $this->db->where('idCiudad', $this->_idCiudad);
            $this->db->update('Ciudad', $data);
        }
    }
}