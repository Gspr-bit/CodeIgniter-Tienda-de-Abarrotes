<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LadoCliente extends CI_Controller
{
    public function index($contenido = 'index')
    {
        $data['content'] = $contenido;
        $this -> load -> view('administrador/plantilla',$data);
    }
}