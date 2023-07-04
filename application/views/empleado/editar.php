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
                <li class="breadcrumb-item"><a href="<?=base_url();?>index.php/empleado">Empleado</a></li>
                <li class="breadcrumb-item active">Editar Empleado</li>
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
                <h3 class="card-title">Editar empleado</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($empleados as $emp): ?>
              <form action="<?=base_url();?>index.php/empleado/modificar" method="post">
                <input type="hidden" name="idEmpleado" value="<?=$emp->idEmpleado;?>">
                <div class="card-body">
                  <div class="form-group">  
                    <label for="Usuario_idUsuario">Usuario</label>

                    <select name="Usuario_idUsuario" id="Usuario_idUsuario" class="form-control select2bs4" style="width: 100%;">

                        <?php foreach($usuarios as $usu): ?>

                        <option value="<?=$usu->idUsuario;?>"
                        
                            <?php if($usu->idUsuario == $emp->Usuario_idUsuario){echo "SELECTED";} ?>
                        
                        >
                       
                        
                        <?=$usu->usuario;?></option>

                        <?php endforeach; ?>

                    </select>

                    <label for="Nivel_idNivel">Nivel</label>

                    <select name="Nivel_idNivel" id="Nivel_idNivel" class="form-control select2bs4" style="width: 100%;">

                        <?php foreach($niveles as $niv): ?>

                        <option value="<?=$niv->idNivel;?>"
                        
                            <?php if($niv->idNivel == $emp->Nivel_idNivel){echo "SELECTED";} ?>
                        
                        >
                       
                        
                        <?=$niv->nivel;?></option>

                        <?php endforeach; ?>

                    </select>

                  </div>
                  <div class="form-group">
                    <label for="empleado">Empleado</label>
                    <input type="text" name="user" id="user" value="<?=$use->user?>">
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
