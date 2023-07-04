<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Gaspar Huerta Saavedra
 */
class Nivel_model extends CI_Model
{
    private $_idProveedor;
    private $_empresa;
    private $_contacto;
    private $_tituloContacto;
    private $_fax;
    private $_sitioWeb;
    private $_Direccion_idDireccion;

    //Getters y Setters
    public function get_idProveedor()
    {
        return $this->_idProveedor;
    }
    
    public function set_idProveedor($_idProveedor)
    {
        $this->_idProveedor = $_idProveedor;

        return $this;
    }
    
    public function get_empresa()
    {
        return $this->_empresa;
    }
    
    public function set_empresa($_empresa)
    {
        $this->_empresa = $_empresa;

        return $this;
    }
    
    public function get_contacto()
    {
        return $this->_contacto;
    }
    
    public function set_contacto($_contacto)
    {
        $this->_contacto = $_contacto;

        return $this;
    }
    
    public function get_tituloContacto()
    {
        return $this->_tituloContacto;
    }
    
    public function set_tituloContacto($_tituloContacto)
    {
        $this->_tituloContacto = $_tituloContacto;

        return $this;
    }
    
    public function get_fax()
    {
        return $this->_fax;
    }
    
    public function set_fax($_fax)
    {
        $this->_fax = $_fax;

        return $this;
    }
    
    public function get_sitioWeb()
    {
        return $this->_sitioWeb;
    }
    
    public function set_sitioWeb($_sitioWeb)
    {
        $this->_sitioWeb = $_sitioWeb;

        return $this;
    }
    
    public function get_Direccion_idDireccion()
    {
        return $this->_Direccion_idDireccion;
    }
    
    public function set_Direccion_idDireccion($_Direccion_idDireccion)
    {
        $this->_Direccion_idDireccion = $_Direccion_idDireccion;

        return $this;
    }

    public function agregarProveedor()
    {
        $data = array(
            'idProveedor'           => $this -> _idProveedor,
            'empresa'               => $this -> _empresa,
            'contacto'              => $this -> _contacto,
            'tituloContacto'        => $this -> _tituloContacto,
            'fax'                   => $this -> _fax,
            'sitioWeb'              => $this -> _sitioWeb,
            'Direccion_idDireccion' => $this -> _Direccion_idDireccion
        );

        $this -> db -> insert('Proveedor',$data);
    }

    public function borrarProveedor()
    {
        $this -> db -> where('idProveedor',$this -> _idProveedor);
        $this -> db -> delete('Proveedor');
    }

    public function listar()
    {
        $this -> db -> select('*');
        $this -> db -> from('Proveedor');

        if ($this -> _idProveedor != null) {
            $this -> db -> where('idProveedor',$this -> _idProveedor);
        }

        $respuesta = $this -> db -> get('Proveedor');
        return $respuesta -> result();
    }

    public function modificarProveedor()
    {
        $data = array(
            'empresa'               => $this -> _empresa,
            'contacto'              => $this -> _contacto,
            'tituloContacto'        => $this -> _tituloContacto,
            'fax'                   => $this -> _fax,
            'sitioWeb'              => $this -> _sitioWeb,
            'Direccion_idDireccion' => $this -> _Direccion_idDireccion
        );
        
        $this -> db -> where('idProveedor',$this -> _idProveedor);
        $this -> db -> update('Proveedor',$data);
    }
}