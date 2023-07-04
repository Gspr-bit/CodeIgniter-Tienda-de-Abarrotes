<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LadoCliente extends CI_Controller
{
    public function index($contenido = 'index')
    {
        $data['content'] = $contenido;
        $this -> load -> view('plantilla',$data);
    }

    public function login()
    {
        $this -> form_validation -> set_rules(
            'usuario','Nombre de usuario','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );
        $this -> form_validation -> set_rules(
            'password','Contraseña','required',array(
                'required' => 'El campo %s es obligatorio'
            )
        );

        if ($this -> form_validation -> run()) {
            // Iniciar sesión
            session_start();
            // Guardar datos de sesión
            $_SESSION["empleado"] = $this -> input -> post('usuario');

            $data['content'] = 'administrador/index';
            $this -> load -> view('administrador/plantilla',$data);
        } else {
            // Regresar al formulario
            $this -> index('login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this -> index('index');
    }
}