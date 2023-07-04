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
                <li class="breadcrumb-item active">Estados</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <a class="btn btn-block btn-default" href="<?=base_url();?>index.php/estado/nuevo"> <i class="far fa-plus-square"></i> Nuevo estado</a>
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de estados</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($estados as $n): ?>
                    <tr>
                        <td><?=$n -> idEstado?></td>
                        <td><?=$n -> estado?></td>
                        <td><a class="btn btn-outline-success" href="<?=base_url();?>index.php/estado/editar/<?=$n -> idEstado?>">Editar</a></td>
                        <td><a class="btn btn-outline-danger" href="<?=base_url();?>index.php/estado/borrar/<?=$n -> idEstado?>">Borrar</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>#</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Borrar</th>
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
