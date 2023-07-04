<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
    }

    public function index()
    {
        $data['categorias'] = $this->Categoria_model->listar();
        $data['contenido']  = 'categoria/listar';
        $this->load->view('administrador/plantilla'.$data);
    }

    public function agregar()
    {
        $this->form_validation->set_rules(
            'nombreCategoria',
            'NombreCategoria',
            'required|min_length[3]|max_length[50]',
            array(
                'required'      => 'La %s es un campo requerido.'
        )
        );
       
        if ($this->form_validation->run()){
            $this->Categoria_model->setIdUsuario(null);
            $this->Categoria_model->setNombreCategoria( $this->input->post('nombreCategoria') );
            $this->Categoria_model->setDescripcion( $this->input->post('descripcion') );
            $this->Categoria_model->setImagenCategoria( $this->input->post('imagenCategoria') );
        
            $this->Categoria_model->agregarCategoria();
            $this->index();
        }
        
    }

    public function borrar($_idNivel)
    {
        $this->Categoria_model->set_idCategoria($_idCategoria);
        $this->Categoria_model->borrarCategoria();
    }

    public function editar($_idCategoria)
    {
        $this->Categoria_model->set_idCategoria($_idCategoria);
        $data['categoria'] = $this->Categoria_model->listar();
        $this->load->view('categoria/editar',$data);
    }

    public function modificar()
    {
        $this->Categoria_model->set_idCategoria($this->input->post('idCategoria'));
        $this->Categoria_model->set_nombreCategoria($this->input->post('nombreCategoria'));
        $this->Categoria_model->set_descripcion($this->input->post('descripcion'));
        $this->Categoria_model->set_imagenCategoria($this->input->post('imagenCategoria'));

        $this->Categoria_model->modificarCategoria();
        $this->index();
    }

    public function nuevo()
    {
        $data['contenido'] = 'categoria/nuevo';
        $this->load->view('administrador/plantilla',$data);
    }
}