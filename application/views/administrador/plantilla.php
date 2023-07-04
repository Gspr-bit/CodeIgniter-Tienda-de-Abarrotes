<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    $this -> load -> view('administrador/plantilla/head');
    $this -> load -> view('administrador/plantilla/navbar');
    $this -> load -> view('administrador/plantilla/main-sidebar');
    // Espacio para el contenido
    $this -> load -> view($contenido);

    $this -> load -> view('administrador/plantilla/footer');
    $this -> load -> view('administrador/plantilla/control-sidebar');
    $this -> load -> view('administrador/plantilla/js');