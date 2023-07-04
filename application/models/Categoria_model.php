<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Sabrina Salcedo García
 */
class Categoria_model extends CI_Model
{
    private $_idCategoria;
    private $_nombreCategoria;
    private $_descripcion;
    private $_imagenCategoria;
    
    // Getters y Setters
    public function get_idCategoria()
    {
        return $this->_idCategoria;
    }
    
    public function set_idCategoria($_idCategoria)
    {
        $this->_idCategoria = $_idCategoria;

        return $this;
    }
    
    public function get_nombreCategoria()
    {
        return $this->_nombreCategoria;
    }
    
    public function set_nombreCategoria($_nombreCategoria)
    {
        $this->_nombreCategoria = $_nombreCategoria;

        return $this;
    }
    
    public function get_descripcion()
    {
        return $this->_descripcion;
    }
    
    public function set_descripcion($_descripcion)
    {
        $this->_descripcion = $_descripcion;

        return $this;
    }

    public function get_imagenCategoria()
    {
        return $this->_imagenCategoria;
    }
    
    public function set_imagenCategoria($_imagenCategoria)
    {
        $this->_imagenCategoria = $_imagenCategoria;

        return $this;
    }

    function __construct()
    {
        parent::__construct();
    }

    public function agregarCategoria()
    {
        $data = array(
            'idCategoria'      => $this->_idCategoria,
            'nombreCategoria'  => $this->_nombreCategoria,
            'descripcion'      => $this->_descripcion,
            'imagenCategoria'  => $this->_imagenCategoria
        );

        $this->db->insert('Categoria',$data);
    }

    public function borrarCategoria()
    {
        $this->db->where('idCategoria',$this->_idCategoria);
        $this->db->delete('Categoria');
    }

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Categoria');

        if ($this->_idCategoria != null) {
            $this->db->where('idCategoria',$this->_idCategoria);
        }

        $respuesta = $this->db->get('Categoria');
        return $respuesta->result();
    }

    public function modificarCategoria()
    {
        $data = array(
            'nombreCategoria' => $this->_nombreCategoria,
            'descripcion'     => $this->_descripcion,
            'imagenCategoria' => $this->_imagenCategoria
        );

        $this->db->where('idCategoria',$this->_idCategoria);
        $this->db->update('Categoria',$data);
    }
}
