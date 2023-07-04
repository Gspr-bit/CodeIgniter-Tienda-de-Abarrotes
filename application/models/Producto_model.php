<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Sabrina Salcedo García
 */
class Producto_model extends CI_Model
{
    private $_idProducto;
    private $_nombreProducto;
    private $_imagenProducto;
    private $_cantidadPorUnidad;
    private $_precioUnitario;
    private $_existencia;
    private $_descontinuado;
    private $_Categoria_idCategoria;
    private $_Proveedor_idProveedor;
    
    // Getters y Setters
    public function get_idProducto()
    {
        return $this->_idProducto;
    }
    
    public function set_idProducto($_idProducto)
    {
        $this->_idProducto = $_idProducto;

        return $this;
    }
    
    public function get_nombreProducto()
    {
        return $this->_nombreProducto;
    }
    
    public function set_nombreProducto($_nombreProducto)
    {
        $this->_nombreProducto = $_nombreProducto;

        return $this;
    }
    
    public function get_imagenProducto()
    {
        return $this->_imagenProducto;
    }
    
    public function set_imagenProducto($_imagenProducto)
    {
        $this->_imagenProducto = $_imagenProducto;

        return $this;
    }

    public function get_cantidadPorUnidad()
    {
        return $this->_cantidadPorUnidad;
    }
    
    public function set_cantidadPorUnidad($_cantidadPorUnidad)
    {
        $this->_cantidadPorUnidad = $_cantidadPorUnidad;

        return $this;
    }

    public function get_precioUnitario()
    {
        return $this->_precioUnitario;
    }
    
    public function set_precioUnitario($_precioUnitario)
    {
        $this->_precioUnitario = $_precioUnitario;

        return $this;
    }

    public function get_existencia()
    {
        return $this->_existencia;
    }
    
    public function set_existencia($_existencia)
    {
        $this->_existencia = $_existencia;

        return $this;
    }

    public function get_descontinuado()
    {
        return $this->_descontinuado;
    }
    
    public function set_descontinuado($_descontinuado)
    {
        $this->_descontinuado = $_descontinuado;

        return $this;
    }

    public function get_Categoria_idCategoria()
    {
        return $this->_Categoria_idCategoria;
    }
    
    public function set_Categoria_idCategoria($_Categoria_idCategoria)
    {
        $this->_Categoria_idCategoria = $_Categoria_idCategoria;

        return $this;
    }

    public function get_Proveedor_idProveedor()
    {
        return $this->_Proveedor_idProveedor;
    }
    
    public function set_Proveedor_idProveedor($_Proveedor_idProveedor)
    {
        $this->_Proveedor_idProveedor = $_Proveedor_idProveedor;

        return $this;
    }

    function __construct()
    {
        parent::__construct();
    }

    public function agregarProducto()
    {
        $data = array(
            'idProducto'            => $this->_idProducto,
            'nombreProducto'        => $this->_nombreProducto,
            'imagenProducto'        => $this->_imagenProducto,
            'cantidadPorUnidad'     => $this->_cantidadPorUnidad,
            'precioUnitario'        => $this->_precioUnitario,
            'existencia'            => $this->_existencia,
            'descontinuado'         => $this->_descontinuado,
            'Categoria_idCategoria' => $this->_Categoria_idCategoria,
            'Proveedor_idProveedor' => $this->_Proveedor_idProveedor
        );

        $this->db->insert('Producto',$data);
    }

    public function borrarProducto()
    {
        $this->db->where('idProducto',$this->_idProducto);
        $this->db->delete('Producto');
    }

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Producto');

        if ($this->_idNivel != null) {
            $this->db->where('idProducto',$this->_idProducto);
        }

        $respuesta = $this->db->get('Producto');
        return $respuesta->result();
    }

    public function modificarProducto()
    {
        $data = array(
            'nombreProducto'        => $this->_nombreProducto,
            'imagenProducto'        => $this->_imagenProducto,
            'cantidadPorUnidad'     => $this->_cantidadPorUnidad,
            'precioUnitario'        => $this->_precioUnitario,
            'existencia'            => $this->_existencia,
            'descontinuado'         => $this->_descontinuado,
            'Categoria_idCategoria' => $this->_Categoria_idCategoria,
            'Proveedor_idProveedor' => $this->_Proveedor_idProveedor
        );

        $this->db->where('idProducto',$this->_idProducto);
        $this->db->update('Producto',$data);
    }
}
