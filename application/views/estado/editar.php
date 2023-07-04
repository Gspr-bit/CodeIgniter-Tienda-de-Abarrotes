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
						<li class="breadcrumb-item"><a href="<?=base_url();?>index.php/administrador/index">Home</a></li>
						<li class="breadcrumb-item"><a href="<?=base_url();?>index.php/estado">Estado</a></li>
						<li class="breadcrumb-item active">Editar Estado</li>
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
					<h3 class="card-title">Editar estado</h3>
				</div>
				<!-- /.card-header -->

				<?php foreach($estado as $n): ?>
				<form action="<?=base_url();?>index.php/estado/modificar" method="post">
					<div class="card-body">
						<div class="form-group">
							<input type="hidden" name="idEstado" id="idEstado" value="<?=$n -> idEstado?>">
                            <label for="estado">Estado</label>
                            <?php echo form_error('estado', '<div class="error">', '</div>');?>
                            <input type="text" name="estado" id="estado" placeholder="Estado" value="<?=$n -> estado?>">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
				</form>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>
<!-- /.content-wrapper -->