<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportista extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Transportista_model"); //Vincular al modelo
    }

    public function index()
    {
        $data['transportistas'] = $this->Transportista_model->listar(); 
        $data['contenido']  = 'transportista/listar';
        $this->load->view('administrador/plantilla', $data);
    }

    public function agregar()
    {
            
            $this->Transportista_model->set_idTransportista(null);
            $this->Transportista_model->set_empresa( $this->input->post('empresa') );
            $this->Transportista_model->set_telefono($this->input->post('telefono'));

            $this->Transportista_model->agregarTransportista();
            echo "Todo bien";
    }
    public function borrar($_idTransportista)
    {
        $this->Transportista_model->set_idTransportista($_idTransportista);
        $this->Transportista_model->borrarTransportista();
        echo "Transportista borrada";
    }

    public function editar($_idTransportista)
    {
        $this->Transportista_model->set_idTransportista($_idTransportista);
        $data['transportista'] = $this->Transportista_model->listar();
        $this->load->view('transportista/editar', $data);
    }
    public function modificar()
    {
        $this->Transportista_model->set_empresa( $this->input->post('empresa') );
        $this->Transportista_model->set_idTransportista($this->input->post('idTransportista'));
        $this->Transportista_model->set_telefono($this->input->post('telefono'));

        $this->Transportista_model->modificarTransportista();
        
        echo "Transportista se ha modificado correctamente";
    }

    public function nuevo()
    {
        $data['contenido'] = 'transportista/nuevo';
        $this->load->view('administrador/plantilla');
    }
}