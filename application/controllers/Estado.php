<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this -> load -> model('Estado_model');
    }

    public function index()
    {
        $data['estados']    = $this -> Estado_model -> listar();
        $data['contenido']  = 'estado/listar';
        $this -> load -> view('administrador/plantilla',$data);
    }

    public function agregar()
    {
        $this -> form_validation -> set_rules(
            'estado','Estado','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );

        if ($this -> form_validation -> run()) {
            $this -> Estado_model -> set_idEstado(0);
            $this -> Estado_model -> set_estado($this -> input -> post('estado'));
        
            $this -> Estado_model -> agregarEstado();
            $this -> index();
        } else {
            // Regresar al formulario
            $this -> nuevo();
        }

        
    }

    public function borrar($_idEstado)
    {
        $this -> Estado_model -> set_idEstado($_idEstado);
        $this -> Estado_model -> borrarEstado();
    }

    public function editar($_idEstado)
    {
        $this -> Estado_model -> set_idEstado($_idEstado);
        $data['estado'] = $this -> Estado_model -> listar();
        $data['contenido'] = 'estado/editar';
        $this -> load -> view('administrador/plantilla',$data);
    }

    public function modificar()
    {
        $this -> form_validation -> set_rules(
            'estado','Estado','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );

        if ($this -> form_validation -> run()) {
            $this -> Estado_model -> set_idEstado($this -> input ->post('idEstado'));
            $this -> Estado_model -> set_estado($this -> input ->post('estado'));
        
            $this -> Estado_model -> modificarEstado();

            $this -> index();
        } else {
            // Regresar al formulario
            $this -> editar($this -> input ->post('idEstado'));
        }
    }

    public function nuevo()
    {
        $data['contenido'] = 'estado/nuevo';
        $this -> load -> view('administrador/plantilla',$data);
    }
}