<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Vanessa López Rangel
 */
class Direccion extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Direccion_model');
        $this->load->model('Colonia_idColonia');
    }

    public function index()
    {
        $data['direccion'] = $this->Direccion_model->listar();
        $data['contenido'] = 'direccion/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
        $this->Direccion_model->set_idDireccion(null);
        $this->Direccion_model->set_calle( $this->input->post('calle') );
        $this->Direccion_model->set_numInterior( $this->input->post('numInterior') );
        $this->Direccion_model->set_numExterior( $this->input->post('numExterior') );
        $this->Direccion_model->setColonia_idColonia( $this->input->post('Colonia_idColonia') );
        
        $this->Direccion_model->agregarDireccion();
    }

    public function editar($_idDireccion = null)
    {
        if($_idDireccion == null){
            //Agregar
        }else{
            $this->Direccion_model->set_idDireccion($_idDireccion);
        }

        $data['direcciones'] = $this->Direccion_model->listar();

        $data['colonias'] = $this->Colonia_model->listar();
        $data['contenido'] = 'direccion/editar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function eliminar($_idDireccion)
    {
        $this->Direccion_model->set_idDireccion($_idDireccion);
        $this->Direccion_model->eliminarDireccion();
    }

    public function modificar()
    {
        $this->Direccion_model->set_idDireccion( $this->input->post('idDireccion') );
        $this->Direccion_model->set_calle( $this->input->post('calle') );
        $this->Direccion_model->set_numInterior( $this->input->post('numInterior') );
        $this->Direccion_model->set_numExterior( $this->input->post('numExterior') );
        $this->Direccion_model->setColonia_idColonia( $this->input->post('Colonia_idColonia') );
        
        $this->Direccion_model->agregarDireccion();

    }

    public function nuevo()
    {
        $data['colonias'] = $this->Colonia_model->listar();
        $data['contenido'] = 'Direccion/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }
}