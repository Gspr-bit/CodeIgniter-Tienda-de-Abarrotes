<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Stephanie Edith Hernandez Jasso
 */
class Estado_model extends CI_Model
{
    private $_idEstado;
    private $_estado;
    
    // Getters y Setters
    public function get_idEstado()
    {
        return $this->_idEstado;
    }

    public function set_idEstado($_idEstado)
    {
        $this->_idEstado = $_idEstado;

        return $this;
    }
    
    public function get_estado()
    {
        return $this->_estado;
    }
    
    public function set_estado($_estado)
    {
        $this->_estado = $_estado;

        return $this;
    }

    function __construct()
    {
        parent::__construct();
    }

    public function agregarEstado()
    {
        $data = array(
            'idEstado'       => $this -> _idEstado,
            'estado'         => $this -> _estado
        );

        $this -> db -> insert('Estado',$data);
    }

    public function borrarEstado()
    {
        $this -> db -> where('idEstado',$this -> _idEstado);
        $this -> db -> delete('Estado');
    }
    
    public function listar()
    {
        if ($this -> _idEstado != null) {
            $this -> db -> where('idEstado',$this -> _idEstado);
        }

        $respuesta = $this -> db -> get('Estado');
        return $respuesta -> result();
    }

    public function modificarEstado()
    {
        $data = array(
            'estado'         => $this -> _estado
        );

        $this -> db -> where('idEstado',$this -> _idEstado);
        $this -> db -> update('Estado',$data);
    }
}




