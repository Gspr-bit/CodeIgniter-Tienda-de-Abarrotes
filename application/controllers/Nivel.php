<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nivel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this -> load -> model('Nivel_model');
    }

    public function index()
    {
        $data['niveles']    = $this -> Nivel_model -> listar();
        $data['contenido']  = 'nivel/listar';
        $this -> load -> view('administrador/plantilla',$data);
    }

    public function agregar()
    {
        $this -> form_validation -> set_rules(
            'nivel','Nivel','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );
        $this -> form_validation -> set_rules(
            'descripcionNivel','Descripcion del nivel','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );

        if ($this -> form_validation -> run()) {
            $this -> Nivel_model -> set_idNivel(0);
            $this -> Nivel_model -> set_nivel($this -> input -> post('nivel'));
            $this -> Nivel_model -> set_descripcionNivel($this -> input -> post('descripcionNivel'));

            $this -> Nivel_model -> agregarNivel();
            $this -> index();
        } else {
            // Regresar al formulario
            $this -> nuevo();
        }
    }

    public function borrar($_idNivel)
    {
        $this -> Nivel_model -> set_idNivel($_idNivel);
        $this -> Nivel_model -> borrarNivel();
    }

    public function editar($_idNivel)
    {
        $this -> Nivel_model -> set_idNivel($_idNivel);
        $data['nivel'] = $this -> Nivel_model -> listar();
        $data['contenido'] = 'nivel/editar';
        $this -> load -> view('administrador/plantilla',$data);
    }

    public function modificar()
    {
        $this -> form_validation -> set_rules(
            'nivel','Nivel','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );
        $this -> form_validation -> set_rules(
            'descripcionNivel','Descripcion del nivel','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );

        if ($this -> form_validation -> run()) {
            $this -> Nivel_model -> set_idNivel($this -> input ->post('idNivel'));
            $this -> Nivel_model -> set_nivel($this -> input ->post('nivel'));
            $this -> Nivel_model -> set_descripcionNivel($this -> input ->post('descripcionNivel'));

            $this -> Nivel_model -> modificarNivel();
            $this -> index();
        } else {
            // Regresar al formulario
            $this -> editar($this -> input ->post('idNivel'));
        }
    }

    public function nuevo()
    {
        $data['contenido'] = 'nivel/nuevo';
        $this -> load -> view('administrador/plantilla',$data);
    }
}