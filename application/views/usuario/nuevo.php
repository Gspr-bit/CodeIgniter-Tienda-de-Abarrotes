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
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/usuario">Usuario</a></li>
                <li class="breadcrumb-item active">Agregar ususario</li>
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
                <h3 class="card-title">Agregar una nuevo usuario</h3>
              </div>
              <!-- /.card-header -->
    
              <form action="<?=base_url();?>index.php/usuario/agregar" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Direccion_idDireccion">Direccion</label>

                    <select class="form-control select2bs4" style="width: 100%;" name="Direccion_idDireccion" id="Direccion_idDireccion">

                        <?php foreach($direcciones as $dir): ?>

                        <option value="<?=$dir->idDireccion;?>"><?=$dir->calle;?><?=$dir->numInterior;?><?=$dir->numExterior;?><?=$dir->Colonia_idColonia;?></option>

                        <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nombre">Usuario</label>
                    <input class="form-control" type="text" name="nombre" id="nombre">
                    <?php echo form_error('nombre', '<div class="text-danger">', '</div>') ?>
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
