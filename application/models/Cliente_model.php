<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Gaspar Huerta Saavedra
 */
class Cliente_model extends CI_Model
{
    private $_idCliente;
    private $_tratamiento;
    private $_Usuario_idUsuario;
    private $_Nivel_idNivel;

    // Getters y Setters
    public function get_idCliente()
    {
        return $this->_idCliente;
    }
    
    public function set_idCliente($_idCliente)
    {
        $this->_idCliente = $_idCliente;

        return $this;
    }
    
    public function get_tratamiento()
    {
        return $this->_tratamiento;
    }
    
    public function set_tratamiento($_tratamiento)
    {
        $this->_tratamiento = $_tratamiento;

        return $this;
    }
    
    public function get_Usuario_idUsuario()
    {
        return $this->_Usuario_idUsuario;
    }
    
    public function set_Usuario_idUsuario($_Usuario_idUsuario)
    {
        $this->_Usuario_idUsuario = $_Usuario_idUsuario;

        return $this;
    }
    
    public function get_Nivel_idNivel()
    {
        return $this->_Nivel_idNivel;
    }
    
    public function set_Nivel_idNivel($_Nivel_idNivel)
    {
        $this->_Nivel_idNivel = $_Nivel_idNivel;

        return $this;
    }

    public function agregarCliente()
    {
        $data = array(
            'idCliente'         => $this -> _idCliente,
            'tratamiento'       => $this -> _tratamiento,
            'Usuario_idUsuario' => $this -> _Usuario_idUsuario,
            'Nivel_idNivel'     => $this -> _Nivel_idNivel
        );

        $this -> db -> insert('Cliente',$data);
    }

    public function borrarCliente()
    {
        $this -> db -> where('idCliente',$this -> _idCliente);
        $this -> db -> delete('Cliente');
    }

    public function listar()
    {
        $this -> db -> select('*');
        $this -> db -> from('Cliente');

        if ($this -> _idCliente != null) {
            $this -> db -> where('idCliente',$this -> _idCliente);
        }

        $respuesta = $this -> db -> get('Cliente');
        return $respuesta -> result();
    }

    public function modificarCliente()
    {
        $data = array(
            'tratamiento'       => $this -> _tratamiento,
            'Usuario_idUsuario' => $this -> _Usuario_idUsuario,
            'Nivel_idNivel'     => $this -> _Nivel_idNivel
        );

        $this -> db -> where('idCliente',$this -> _idCliente);
        $this -> db -> update('Cliente',$data);
    }
}