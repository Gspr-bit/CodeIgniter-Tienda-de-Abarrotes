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
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/empleado">Nivel</a></li>
                <li class="breadcrumb-item active">Agregar nivel</li>
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
                <h3 class="card-title">Agregar una nuevo estado</h3>
              </div>
              <!-- /.card-header -->
    
              <form action="<?=base_url();?>index.php/nivel/agregar" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nivel">Nivel</label>
                    <?php echo form_error('nivel', '<div class="error">', '</div>');?>
                    <input class="form-control" type="text" name="nivel" id="nivel" placeholder="Nivel"value="<?php echo set_value('nivel'); ?>">
                    <label for="descripcionNivel">Descripcion del nivel</label>
                    <?php echo form_error('descripcionNivel', '<div class="error">', '</div>');?>
                    <input class="form-control" type="text" name="descripcionNivel" id="descripcionNivel" placeholder="Descripción" value="<?php echo set_value('descripcionNivel'); ?>">
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
