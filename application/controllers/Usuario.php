<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller
{
   
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->model('Direccion_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['usuarios'] = $this->Usuario_model->listar();
        $data['contenido'] = 'usuario/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
        $this->form_validation->set_rules(
            'nombre',
            'Nombre',
            'required|min_length[3]|max_length[50]',
            array(
                'required'      => 'La %s es un campo requerido.'
        )
        );
       
        if ($this->form_validation->run()){
            $this->Usuario_model->setIdUsuario(null);
            $this->Usuario_model->setNombre( $this->input->post('nombre') );
            $this->Usuario_model->setTelefono( $this->input->post('telefono') );
            $this->Usuario_model->setCorreo( $this->input->post('correo') );
            $this->Usuario_model->setDireccion_idDireccion( $this->input->post('Direccion_idDireccion') );
        
            $this->Usuario_model->agregarUsuario();
            $this->index();
        } else {
            $data['direcciones'] = $this->Direccion_model->listar();
            $data['contenido'] = 'usuario/nuevo';
            $this->load->view('administrador/plantilla', $data);

        }
        
    }

    public function editar($idUsuario = null)
    {
        if($idUsuario == null){
    
        }else{
            $this->Usuario_model->setIdCiudad($idUsuario);
        }

        $data['usuarios'] = $this->Usuario_model->listar();

        $data['direcciones'] = $this->Direccion_model->listar();
        $data['contenido'] = 'usuario/editar';
        $this->load->view('administrador/plantilla', $data);
        $this->load->view('usuario/editar', $data);
    }

    public function eliminar($idUsuario)
    {
        $this->Usuario_model->setIdUsuario($idUsuario);
        $this->Usuario_model->eliminarUsuario();
    }

    public function modificar()
    {
        $this->Usuario_model->setIdUsuario( $this->input->post('idUsuario') );
        $this->Usuario_model->setApellidos( $this->input->post('apellidos') );
        $this->Usuario_model->setNombre( $this->input->post('nombre') );
        $this->Usuario_model->setTelefono( $this->input->post('telefono') );
        $this->Usuario_model->setCorreo( $this->input->post('correo') );
        $this->Usuario_model->setDireccion_idDireccion( $this->input->post('Direccion_idDireccion') );
        
        $this->Usuario_model->agregarUsuario();

    }

    public function nuevo()
    {
        $data['direcciones'] = $this->Direccion_model->listar();
        $data['contenido'] = 'usuario/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }

}