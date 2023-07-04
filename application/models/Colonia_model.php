<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colonia_model extends CI_Model
{
    private $idColonia;
    private $colonia;
    private $Ciudad_idCiudad;

    function __construct()
    {
        parent::__construct();
    }

    public function getIdColonia()
    {
        return $this->idColonia;
    }

    public function setIdColonia($idColonia)
    {
        $this->idColonia = $idColonia;
    }

    public function getColonia()
    {
        return $this->colonia;
    }

    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    }

    public function getCiudad_idCiudad()
    {
        return $this->Ciudad_idCiudad;
    }

    public function setCiudad_idCiudad($Ciudad_idCiudad)
    {
        $this->Ciudad_idCiudad = $Ciudad_idCiudad;
    }

    public function eliminarColonia()
    {
        $this->db->where('idColonia', $this->idColonia);
        $this->db->delete('Colonia');
    }
    

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Colonia');
        $this->db->join('Ciudad', 'Ciudad_idCiudad = idCiudad');

        if($this->idColonia != null){
            $this->db->where('idColonia', $this->idColonia);
        }

        $resp = $this->db->get();
        return $resp->result();
    }

    public function agregarColonia()
    {
        $data = array(
            'idColonia'          => $this->idColonia,
            'colonia'            => $this->colonia,
            'Ciudad_idCiudad'   => $this->Ciudad_idCiudad    
        );

        if( $this->idColonia == null )
        {
            $this->db->insert('Colonia', $data);
        }else{
            $this->db->where('idColonia', $this->idColonia);
            $this->db->update('Colonia', $data);
        }
    }
}