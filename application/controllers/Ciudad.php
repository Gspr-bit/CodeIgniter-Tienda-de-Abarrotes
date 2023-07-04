<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudad extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Ciudad_model');
        $this->load->model('Estado_model');
    }

    public function index()
    {
        $data['ciudades'] = $this->Ciudad_model->listar();
        $data['contenido'] = 'ciudad/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
        $this->form_validation->set_rules(
            'ciudad',
            'Ciudad',
            'required|min_length[3]|max_length[50]',
            array(
                'required'      => 'La %s es un campo requerido.'
        )
        );
       
        if ($this->form_validation->run()){
            $this->Ciudad_model->setIdCiudad(null);
            $this->Ciudad_model->setCiudad( $this->input->post('ciudad') );
            $this->Ciudad_model->setEstado_idEstado( $this->input->post('Estado_idEstado') );
        
            $this->Ciudad_model->agregarCiudad();
            $this->index();
        } else {
            $data['direcciones'] = $this->Estado_model->listar();
            $data['contenido'] = 'ciudad/nuevo';
            $this->load->view('administrador/plantilla', $data);

        }
        
    }

    public function editar($_idCiudad = null)
    {
        if($_idCiudad == null){
            //Agregar
        }else{
            $this->Ciudad_model->set_idCiudad($_idCiudad);
        }

        $data['ciudades'] = $this->Ciudad_model->listar();

        $data['estados'] = $this->Estado_model->listar();
        $data['contenido'] = 'ciudad/editar';
        $this->load->view('administrador/plantilla', $data);
        //$this->load->view('ciudad/editar', $data);
    }

    public function eliminar($_idCiudad)
    {
        $this->Ciudad_model->set_idCiudad($_idCiudad);
        $this->Ciudad_model->eliminarCiudad();
    }

    public function modificar()
    {
        $this->Ciudad_model->set_idCiudad( $this->input->post('idCiudad') );
        $this->Ciudad_model->set_ciudad( $this->input->post('ciudad') );
        $this->Ciudad_model->setEstado_idEstado( $this->input->post('Estado_idEstado') );
        
        $this->Ciudad_model->agregarCiudad();

    }

    public function nuevo()
    {
        $data['estados'] = $this->Estado_model->listar();
        $data['contenido'] = 'ciudad/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }

}