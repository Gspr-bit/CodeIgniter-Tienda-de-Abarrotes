<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colonia extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Colonia_model');
        $this->load->model('Ciudad_model');
    }

    public function index()
    {
        $data['colonias'] = $this->Colonia_model->listar();
        $data['contenido'] = 'colonia/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
        $this->Colonia_model->setIdColonia(null);
        $this->Colonia_model->setColonia( $this->input->post('colonia') );
        $this->Colonia_model->setCiudad_idCiudad( $this->input->post('Ciudad_idCiudad') );
        
        $this->Colonia_model->agregarColonia();
    }

    public function editar($idColonia = null)
    {
        if($idColonia == null){
           
        }else{
            $this->Colonia_model->setIdColonia($idColonia);
        }

        $data['colonias'] = $this->Colonia_model->listar();

        $data['ciudades'] = $this->Ciudad_model->listar();
        $data['contenido'] = 'colonia/editar';
        $this->load->view('administrador/plantilla', $data);
        
    }

    public function eliminar($idColonia)
    {
        $this->Colonia_model->setIdColonia($idColonia);
        $this->Colonia_model->eliminarColonia();
    }

    public function modificar()
    {
        $this->Colonia_model->setIdColonia( $this->input->post('idColonia') );
        $this->Colonia_model->setColonia( $this->input->post('colonia') );
        $this->Colonia_model->setCiudad_idCiudad( $this->input->post('Ciudad_idCiudad') );
        
        $this->Colonia_model->agregarColonia();

    }

    public function nuevo()
    {
        $data['ciudades'] = $this->Ciudad_model->listar();
        $data['contenido'] = 'colonia/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }

}