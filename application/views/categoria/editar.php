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
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/administrador">Home</a></li>
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/categoria">Categoria</a></li>
                <li class="breadcrumb-item active">Editar categoria</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
            <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Editar categoria</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($ciudades as $ciu): ?>
              <form action="<?=base_url();?>index.php/categoria/modificar" method="post">
                <input type="hidden" name="idCategoria" value="<?=$cat->idCategoria;?>">
                <div class="card-body">

                  <div class="form-group">
                    <label for="nombreCategoria">Categoria</label>
                    <input type="text" name="nombreCategoria" id="nombreCategoria" value="<?=$cat->nombreCategoria?>">
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</button>
                  </div>
              </form>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
      </div>
  <!-- /.content-wrapper -->
