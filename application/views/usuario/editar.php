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
                <li class="breadcrumb-item active">Editar usuario</li>
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
                <h3 class="card-title">Editar usuario</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($usuarios as $usu): ?>
              <form action="<?=base_url();?>index.php/usuario/modificar" method="post">
                <input type="hidden" name="idUsuario" value="<?=$usu->idUsuario;?>">
                <div class="card-body">
                  <div class="form-group">  
                    <label for="Direccion_idDireccion">Direccion</label>

                    <select name="Direccion_idDirecciono" id="Direccion_idDirecciono" class="form-control select2bs4" style="width: 100%;">

                        <?php foreach($direcciones as $dir): ?>

                        <option value="<?=$dir->idDireccion;?>"
                        
                            <?php if($dir->idDireccion == $usu->Direccion_idDireccion){echo "SELECTED";} ?>
                        
                        >
                       
                        
                        <?=$dir->direccion;?></option>

                        <?php endforeach; ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?=$nom->nombre?>">
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
