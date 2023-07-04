<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model
{

    private $idUsuario;
    private $apellidos;
    private $nombre;
    private $telefono;
    private $correo;
    private $Direccion_idDireccion;
   
    function __construct()
    {
        parent::__construct();   
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
    
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getDireccion_idDireccion()
    {
        return $this->Direccion_idDireccion;
    }

    public function setDireccion_idDireccion($Direccion_idDireccion)
    {
        $this->Direccion_idDireccion = $Direccion_idDireccion;
    }

     public function eliminarUsuario()
    {
        $this->db->where('idUsuario', $this->idUsuario);
        $this->db->delete('Usuario');
    }

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Usuario');
        $this->db->join('Direccion', 'Direccion_idDireccion = idDireccion');

        if($this->idUsuario != null){
            $this->db->where('idUsuario', $this->idUsuario);
        }

        $resp = $this->db->get();
        return $resp->result();
    }

    public function agregarUsuario()
    {
        $data = array(
            'idUsuariod'                 => $this->idUsuarioi,
            'apellidos'                  => $this->apellidos,
            'nombre'                     => $this->nombre,
            'telefono'                   => $this->telefono,
            'correo'                     => $this->correo,
            'Direccion_idDireccion'      => $this->Direccion_idDireccion   
        );
        if( $this->idUsuario == null )
        {
            $this->db->insert('Usuario', $data);
        }else{
            $this->db->where('idUsuario', $this->idUsuario);
            $this->db->update('Usuario', $data);
        }
    }
}