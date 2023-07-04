<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this -> load -> view('plantilla/head');
$this -> load -> view('plantilla/header');

$this -> load -> view('contenido/'.$content);
$this -> load -> view('plantilla/footer');
$this -> load -> view('plantilla/js');