<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Gaspar Huerta Saavedra
 */
class Nivel_model extends CI_Model
{
    private $_idNivel;
    private $_nivel;
    private $_descripcionNivel;
    
    // Getters y Setters
    public function get_idNivel()
    {
        return $this->_idNivel;
    }
    
    public function set_idNivel($_idNivel)
    {
        $this->_idNivel = $_idNivel;

        return $this;
    }
    
    public function get_nivel()
    {
        return $this->_nivel;
    }
    
    public function set_nivel($_nivel)
    {
        $this->_nivel = $_nivel;

        return $this;
    }
    
    public function get_descripcionNivel()
    {
        return $this->_descripcionNivel;
    }
    
    public function set_descripcionNivel($_descripcionNivel)
    {
        $this->_descripcionNivel = $_descripcionNivel;

        return $this;
    }

    function __construct()
    {
        parent::__construct();
    }

    public function agregarNivel()
    {
        $data = array(
            'idNivel'           => $this -> _idNivel,
            'nivel'             => $this -> _nivel,
            'descripcionNivel'  => $this -> _descripcionNivel
        );

        $this -> db -> insert('Nivel',$data);
    }

    public function borrarNivel()
    {
        $this -> db -> where('idNivel',$this -> _idNivel);
        $this -> db -> delete('Nivel');
    }

    /**
     * Si $_idNivel es específicado regresa el registro en Nivel con el idEspecificado.
     * Si $_idNivel es nulo regresa todos los registros de nivel
     * 
     * @return $respuesta
     */
    public function listar()
    {
        if ($this -> _idNivel != null) {
            $this -> db -> where('idNivel',$this -> _idNivel);
        }

        $respuesta = $this -> db -> get('Nivel');
        return $respuesta -> result();
    }

    public function modificarNivel()
    {
        $data = array(
            'nivel'             => $this -> _nivel,
            'descripcionNivel'  => $this -> _descripcionNivel
        );

        $this -> db -> where('idNivel',$this -> _idNivel);
        $this -> db -> update('Nivel',$data);
    }
}
