<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_model extends CI_Model
{

    private $idEmpleado;
    private $user;
    private $password;
    private $fechaNacimiento;
    private $fechaContrato;
    private $fechaDespedido;
    private $telefonoPersonal;
    private $extension;
    private $fotografia;
    private $notas;
    private $Usuario_idUsuario;
    private $Nivel_idNivel;

    function __construct()
    {
     parent::__construct();   
    }

    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getFechaContrato()
    {
        return $this->fechaContrato;
    }

    public function setFechaContrato($fechaContrato)
    {
        $this->fechaContrato = $fechaContrato;
    }

    public function getFechaDespido()
    {
        return $this->fechaDespedido;
    }

    public function setFechaDespido($fechaDespedido)
    {
        $this->fechaDespedido = $fechaDespedido;
    }

    public function getTelefonoPersonal()
    {
        return $this->telefonoPersonal;
    }

    public function setTelefonoPersonal($telefonoPersonal)
    {
        $this->telefonoPersonal = $telefonoPersonal;
    }

    public function getExtension()
    {
        return $this->extension;
    }

    public function setExtension($extencion)
    {
        $this->extension = $extencion;
    }

    public function getFotografia()
    {
        return $this->fotografia;
    }

    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;
    }

    public function getNotas()
    {
        return $this->notas;
    }

    public function setNotas($notas)
    {
        $this->notas = $notas;
    }

    public function getUsuario_idUsuario()
    {
        return $this->Usuario_idUsuario;
    }

    public function setUsuario_idUsuario($Usuario_idUsuario)
    {
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getNivel_idNivel()
    {
        return $this->Nivel_idNivel;
    }

    public function setNivel_idNivel($Nivel_idNivel)
    {
        $this->Nivel_idNivel = $Nivel_idNivel;
    }

    public function eliminarEmpleado()
    {
        $this->db->where('idEmpleado', $this->idEmpleado);
        $this->db->delete('empleado');
    }

    public function listar()
    {
        $this->db->select('*');
        $this->db->from('Empleado');
        $this->db->join('Usuario', 'Usuario_idUsuario = idUsuario');
        $this->db->join('Nivel','Nivel_idNivel = idNivel');

        if($this->idEmpleado != null){
            $this->db->where('idEmpleado', $this->idEmpleado);
        }

        $resp = $this->db->get();
        return $resp->result();
    }

    public function agregarEmpleado()
    {
        $data = array(
            'idEmpleado'            => $this->idEmpleado,
            'user'                  => $this->user,
            'password'              => $this->password,
            'fechaNacimiento'       => $this->fechaNacimiento,
            'fechaContrato'         => $this->fechaContrato,
            'fechaDespido'          => $this->fechaDespedido,
            'telefonoPersonal'      => $this->telefonoPersonal,
            'extension'             => $this->extension,
            'fotografia'            => $this->fotografia,
            'notas'                 => $this->notas,
            'Usuario_idUsuario'     => $this->Usuario_idUsuario,
            'Nivel_idNivel'   => $this->Nivel_idNivel    
        );

        if( $this->idEmpleado == null )
        {
            $this->db->insert('Empleado', $data);
        }else{
            $this->db->where('idEmpleado', $this->idEmpleado);
            $this->db->update('Empleado', $data);
        }
    }

}