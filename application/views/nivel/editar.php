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
						<li class="breadcrumb-item"><a href="<?=base_url();?>index.php/estado">Nivel</a></li>
						<li class="breadcrumb-item active">Editar nivel</li>
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
					<h3 class="card-title">Editar nivel</h3>
				</div>
				<!-- /.card-header -->

				<?php foreach($nivel as $n): ?>
				<form action="<?=base_url();?>index.php/nivel/modificar" method="post">
					<div class="card-body">
						<div class="form-group">
							<input type="hidden" name="idNivel" id="idNivel"  value="<?=$n -> idNivel?>">
                            <label for="nivel">Nivel</label>
                            <?php echo form_error('nivel', '<div class="error">', '</div>');?>
                            <input type="text" name="nivel" id="nivel" placeholder="Nivel" value="<?=$n -> nivel?>">
                            <label for="descripcionNivel">Descripción</label>
                            <?php echo form_error('descripcionNivel', '<div class="error">', '</div>');?>
                            <input type="text" name="descripcionNivel" id="descripcionNivel" placeholder="Descripción" value="<?=$n -> descripcionNivel?>">
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