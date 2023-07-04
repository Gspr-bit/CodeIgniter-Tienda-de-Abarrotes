<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header class="header">

<div class="header-wrap">

    <div class="logo plain logo-left">
        <div class="site-title">
            <a href="<?=base_url();?>index.php/LadoCliente/index" title="Go to Home">QUALITY +</a>
        </div>
    </div><!-- /logo -->


    <nav id="nav" role="navigation">
        <div class="table">
            <div class="table-cell">
                <ul id="menu-menu-1">
                    <li class="menu-item">
                        <a href="<?=base_url();?>index.php/LadoCliente/index">INICIO</a></li>
                    <li class="menu-item">
                        <a href="<?=base_url();?>index.php/LadoCliente/index/about">Informacion</a></li>
                 
                    <li class="menu-item">
                        <a href="<?=base_url();?>index.php/LadoCliente/index/blog">Productos</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?=base_url();?>index.php/LadoCliente/index/comida">Comida</a>
                                <a href="<?=base_url();?>index.php/LadoCliente/index/electronicos">Electronica</a>
                                <a href="<?=base_url();?>index.php/LadoCliente/index/jugueteria">Jugueteria</a>
                                <a href="<?=base_url();?>index.php/LadoCliente/index/deportes">Deportes</a>
                                <a href="<?=base_url();?>index.php/LadoCliente/index/farmacia">Farmacia</a>
                            </li>
                        </ul>
                    </li>
                        <a href="<?=base_url();?>index.php/LadoCliente/index/contact">Contact me</a></li>
                    <li class="menu-inline menu-item">
                        <a title="Twitter" href="http://twitter.com/fh5co">
                            <i class="fa fa-twitter"></i><span class="i">Twitter</span>
                        </a></li>
                    <li class="menu-inline menu-item">
                        <a title="Facebook" href="http://www.facebook.com/fh5co">
                            <i class="fa fa-facebook"></i><span class="i">Facebook</span>
                        </a></li>
                    <li class="menu-inline menu-item">
                        <a title="Flickr" href="#"><i class="fa fa-flickr"></i><span class="i">Flickr</span></a>
                    </li>
                    <li class="menu-inline menu-item">
                        <a title="Instagram" href="#">
                            <i class="fa fa-instagram"></i><span class="i">Instagram</span>
                        </a>
                    </li>
                    <li class="menu-inline menu-item">
                        <?php
                            if (session_status() == 2) {    // Si esta activa la sesión
                                $data['url']        = 'index.php/LadoCliente/logout';
                                $data['mensaje']    = 'Cerrar sesión de '.$_SESSION["empleado"];
                            } else {                        // Si esta cerrada o deshabilitada
                                $data['url']        = 'index.php/LadoCliente/index/login';
                                $data['mensaje']    = 'Iniciar sesión';
                            }
                        ?>
                        
                        <a title="<?=$data['mensaje'];?>" href="<?=base_url();?><?=$data['url'];?>">                            
                            <i class="fa fa-user"></i><span class="i"><?=$data['mensaje'];?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a href="#nav" class="menu-trigger"><i class="fa fa-bars"></i></a>

    <a href="#topsearch" class="search-trigger"><i class="fa fa-search"></i></a>

</div>

</header>
