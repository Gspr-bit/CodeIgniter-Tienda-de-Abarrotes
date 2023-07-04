<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion_model extends CI_Model
{
    private $_idDireccion;
    private $_calle;
    private $_numInterior;
    private $_numExterior;
    private $Colonia_idColonia;

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_idDireccion()
    {
        return $this->_idDireccion;
    }

    public function set_idDireccion($_idDireccion)
    {
        $this->_idDireccion = $_idDireccion;
    }

    public function get_calle()
    {
        return $this->_calle;
    }

    public function set_calle($_calle)
    {
        $this->_calle = $_calle;
    }

    public function get_numInterior()
    {
        return $this->_numInterior;
    }

    public function set_numInterior($_numInterior)
    {
        $this->_numInterior = $_numInterior;
    }

    public function get_numExterior()
    {
        return $this->_numExterior;
    }

    public function set_numExterior($_numExterior)
    {
        $this->_numExterior = $_numExterior;
    }

    public function getColonia_idColonia()
    {
        return $this->Colonia_idColonia;
    }

    public function setColonia_idColonia($Colonia_idColonia)
    {
        $this->Colonia_idColonia = $Colonia_idColonia;
    }

    public function listar()
    {
        //Consulta multitabla
        $this->db->select('*');
        $this->db->from('Direccion');
        $this->db->join('Colonia', 'Colonia_idColonia = idColonia');

        if($this->_idDireccion != null){
            $this->db->where('idCiudad', $this->_idDireccion);
        }

        $resp = $this->db->get();
        return $resp->result();
    }
    
    public function agregarDireccion()
    {
        $data = array(
            'idDireccion'          => $this->_idDireccion,
            'calle'            => $this->_calle,
            'numInterior'            => $this->_numInterior,
            'numExterior'            => $this->_numExterior,
            'Colonia_idColonia'   => $this->Colonia_idColonia 
        );

        if( $this->_idDireccion == null )
        {
            //Agregar
            $this->db->insert('Direccion', $data);
        }else{
            //Modificar
            $this->db->where('idDireccion', $this->_idDireccion);
            $this->db->update('Direccion', $data);
        }
    }
}