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
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/ciudad">Ciudad</a></li>
                <li class="breadcrumb-item active">Agregar ciudad</li>
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
                <h3 class="card-title">Agregar una nueva ciudad</h3>
              </div>
              <!-- /.card-header -->
    
              <form action="<?=base_url();?>index.php/ciudad/agregar" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Estado_idEstado">Estado</label>

                    <select class="form-control select2bs4" style="width: 100%;" name="Estado_idEstado" id="Estado_idEstado">

                        <?php foreach($estados as $edo): ?>

                        <option value="<?=$edo->idEstado;?>"><?=$edo->estado;?></option>

                        <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input class="form-control" type="text" name="ciudad" id="ciudad">
                    <?php echo form_error('ciudad', '<div class="text-danger">', '</div>') ?>
                  </div>
                </div>
                <div class="card-footer">
                  <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Agregar</button>
                </div>
              </form>
            </div>
          </div>
        </section>
      </div>
  <!-- /.content-wrapper -->    
