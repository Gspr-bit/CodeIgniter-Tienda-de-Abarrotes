<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Empleado_model');   
        $this->load->model('Usuario_model');
        $this->load->model('Nivel_model');
        $this->load->model('form_validation');
    }

    public function index()
    {
        $data['empleados'] = $this->Empleado_model->listar();
        $data['contenido'] = 'empleado/listar';
        $this->load->view('administrador/plantilla', $data);
    }
    
    public function agregar()
    {
        $this->form_validation->set_rules(
            'empleado',
            'Empleado',
            'required|min_length[3]|max_length[50]',
            array(
                'required'      => 'La %s es un campo requerido.'
        )
        );
        
        if ($this->form_validation->run()){
            $this->Empleado_model->setIdEmpleao(null);
            $this->Empleado_model->setUser( $this->input->post('user') );
            $this->Empleado_model->setPassword( $this->input->post('password') );
            $this->Empleado_model->setFechaNacimiento( $this->input->post('fechaNacimiento') );
            $this->Empleado_model->setFechaContrato( $this->input->post('fechaContrato') );
            $this->Empleado_model->setFechaDespido( $this->input->post('fechaDespido') );
            $this->Empleado_model->setTelefonoPersonal( $this->input->post('telefonoPersonal') );
            $this->Empleado_model->setExtension( $this->input->post('extension') );
            $this->Empleado_model->setFotografia( $this->input->post('fotografia') );
            $this->Empleado_model->setNotas( $this->input->post('notas') );
            $this->Empleado_model->setUsuario_idUsuario( $this->input->post('Usuario_idUsuario') );
            $this->Empleado_model->setNivel_idNivel( $this->input->post('Nivel_idNivel') );
        
            $this->Empleado_model->agregarEmpleado();
            $this->index();
        } else {
            $data['empleados'] = $this->Usuario_model->listar();
            $data['empleados'] = $this->Nivel_model->listar();
            $data['contenido'] = 'empleado/nuevo';
            $this->load->view('administrador/plantilla', $data);
        }
        
    }

    public function editar($idEmpleado = null)
    {
        if($idEmpleado == null){
        }else{
            $this->Empleado_model->setIdEmpleado($idEmpleado);
        }

        $data['empleados'] = $this->Empleado_model->listar();

        $data['usuarios'] = $this->Usuario_model->listar();
        $data['niveles'] = $this->Nivel_model->listar();
        $data['contenido'] = 'empleados/editar';
        $this->load->view('administrador/plantilla', $data);
        $this->load->view('empleado/editar', $data);
    }

    public function eliminar($idEmpleado)
    {
        $this->Empleado_model->setIdEmpleado($idEmpleado);
        $this->Empleado_model->eliminarEmpleado();
    }

    public function modificar()
    {
        $this->Empleado_model->setIdEmpleao( $this->input->post('idEmpleado') );
        $this->Empleado_model->setUser( $this->input->post('user') );
        $this->Empleado_model->setPassword( $this->input->post('password') );
        $this->Empleado_model->setFechaNacimiento( $this->input->post('fechaNacimiento') );
        $this->Empleado_model->setFechaContrato( $this->input->post('fechaContrato') );
        $this->Empleado_model->setFechaDespido( $this->input->post('fechaDespido') );
        $this->Empleado_model->setTelefonoPersonal( $this->input->post('telefonoPersonal') );
        $this->Empleado_model->setExtension( $this->input->post('extension') );
        $this->Empleado_model->setFotografia( $this->input->post('fotografia') );
        $this->Empleado_model->setNotas( $this->input->post('notas') );
        $this->Empleado_model->setUsuario_idUsuario( $this->input->post('Usuario_idUsuario') );
        $this->Empleado_model->setNivel_idNivel( $this->input->post('Nivel_idNivel') );
        
        $this->Empleado_model->agregarEmpleado();

    }

    public function nuevo()
    {
        $data['usuarios'] = $this->Usuario_model->listar();
        $data['niveles'] = $this->Nivel_model->listar();
        $data['contenido'] = 'empleado/nuevo';
        $this->load->view('administrador/plantilla', $data);
    }

}