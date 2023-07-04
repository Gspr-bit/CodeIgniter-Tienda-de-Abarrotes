<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this -> load -> model('Cliente_model');
        $this -> load -> model('Usuario_model');
        $this -> load -> model('Nivel_model');
    }

    public function index()
    {
        $data['clientes']   = $this -> Cliente_model -> listar();
        $data['contenido']  = 'cliente/listar';
        $this -> load -> view('administrador/plantilla'.$data);
    }

    public function agregar()
    {
        $this->form_validation->set_rules(
            'tratamiento',
            'TratCliente',
            'required|min_length[3]|max_length[50]',
            array(
                'required'      => 'La %s es un campo requerido.'
        )
        );
       
        if ($this->form_validation->run()){
            $this->Cliente_model->setIdCliente(null);
            $this->Cliente_model->setTratamiento( $this->input->post('tratamiento') );
            $this->Cliente_model->setUsuario_idUsuario( $this->input->post('Usuario_idUsuario') );
            $this->Cliente_model->setNivel_idNivel( $this->input->post('Nivel_idNivel') );
        
            $this->Usuario_model->agregarNivel();
            $this->index();
        } else {
            $data['niveles'] = $this->Nivel_idNivel->listar();
            $data['usuarios'] = $this->Usuario_idUsuario->listar();
            $data['contenido'] = 'cliente/nuevo';
            $this->load->view('administrador/plantilla', $data);

        }
    }

    public function borrar($_idCliente)
    {
        $this -> Cliente_model -> set_idCliente($_idCliente);
        $this -> Cliente_model -> borrarCliente();
    }

    public function editar($_idCliente)
    {
        $this -> Cliente_model -> set_idCliente($_idCliente);
        $data['usuarios']   = $this -> Usuario_model -> listar();
        $data['niveles']    = $this -> Nivel_model -> listar();
        $data['contenido']  = 'cliente/listar';
        $this -> load -> view('administrador/plantilla'.$data);
    }

    public function modificar()
    {
        $this -> Cliente_model -> set_idCliente($this -> input -> post('idCliente'));
        $this -> Cliente_model -> set_tratamiento($this -> input -> post('tratamiento'));
        $this -> Cliente_model -> set_Usuario_idUsuario($this -> input -> post('Usuario_idUsuario'));
        $this -> Cliente_model -> set_Nivel_idNivel($this -> input -> post('Nivel_idNivel'));

        $this -> Cliente_model -> modificarCliente();
        $this -> index();
    }

    public function nuevo()
    {
        $data['usuarios']   = $this -> Usuario_model -> listar();
        $data['niveles']    = $this -> Nivel_model -> listar();
        $data['contenido']  = 'cliente/listar';
        $this -> load -> view('administrador/plantilla',$data);
    }
}