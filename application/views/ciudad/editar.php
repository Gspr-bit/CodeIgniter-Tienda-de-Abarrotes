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
                <li class="breadcrumb-item active">Editar ciudad</li>
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
                <h3 class="card-title">Editar ciudad</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($ciudades as $ciu): ?>
              <form action="<?=base_url();?>index.php/ciudad/modificar" method="post">
                <input type="hidden" name="idCiudad" value="<?=$ciu->idCiudad;?>">
                <div class="card-body">
                  <div class="form-group">  
                    <label for="Estado_idEstado">Estado</label>

                    <select name="Estado_idEstado" id="Estado_idEstado" class="form-control select2bs4" style="width: 100%;">

                        <?php foreach($estados as $edo): ?>

                        <option value="<?=$edo->idEstado;?>"
                        
                            <?php if($edo->idEstado == $ciu->Estado_idEstado){echo "SELECTED";} ?>
                        
                        >
                        
                        
                        <?=$edo->estado;?></option>

                        <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" value="<?=$ciu->ciudad?>">
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
