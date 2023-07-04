<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form action="<?=base_url();?>index.php/categoria/agregar" method="post">
    <label for="nombreCategoria"></label>
    <input type="text" name="nombreCategoria" id="nombreCategoria" placeholder="Categoria">
    <br>
    <label for="descripcion"></label>
    <input type="text" name="descripcion" id="descripcion" placeholder="Descripción">
    <br>
    <label for="imagenCategoria"></label>
    <input type="file" name="imagenCategoria" id="imagenCategoria" placeholder="Imagen">
    <br>
    <button type="submit">Agregar</button>
</form>

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
                <li class="breadcrumb-item active">Agregar categoria</li>
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
                <h3 class="card-title">Agregar una nueva categoria</h3>
              </div>
              <!-- /.card-header -->
    
              <form action="<?=base_url();?>index.php/categoria/agregar" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input class="form-control" type="text" name="nombreCategoria" id="nombreCategoria">
                    <?php echo form_error('categoria', '<div class="text-danger">', '</div>') ?>
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
