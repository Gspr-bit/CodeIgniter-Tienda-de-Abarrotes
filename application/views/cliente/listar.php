<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Clientes</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <a class="btn btn-block btn-default" href="<?=base_url();?>index.php/cliente/nuevo"> <i class="far fa-plus-square"></i> Nueva cliente</a>
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de clientes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>idCliente</th>
                        <th>Tratamiento</th>
                        <th>Usuario</th>
                        <th>Nivel</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($clientes as $cli): ?>
                    <tr>
                        <td><?=$cli->idCliente;?></td>
                        <td><?=$cli->tratamiento;?></td>
                        <td><?=$cli->usuario;?></td>
                        <td><?=$cli->nivel;?></td>
                        <td><a class="btn btn-outline-success" href="<?=base_url();?>index.php/cliente/editar/<?=$cli->idCliente;?>"><i class="fas fa-edit"></i></a></td>
                        <td><a class="btn btn-outline-danger" href="<?=base_url();?>index.php/cliente/eliminar/<?=$cli->idCliente;?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>idCliente</th>
                        <th>Tratamiento</th>
                        <th>Usuario</th>
                        <th>Nivel</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                  </tfoot>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </section>
    </div>
  <!-- /.content-wrapper -->