<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="wrap full-wrap">
    <div class="main-wrap">

        <section class="main">
            <article class="post page">

                <div class="inner">
                    <h1>Inicia sesión</h1>
                    <div class="post-content">
                        <p>Inicia sesión para tener más beneficios</p>
                        <form method="POST" action="<?=base_url();?>index.php/LadoCliente/login">
                            <p>
                                <?php echo form_error('usuario', '<div class="status oops">', '</div>');?>
                                <input type="text" name="usuario"size="40" placeholder="Nombre de usuario*"value="<?php echo set_value('usuario'); ?>">
                            </p>
                            <p>
                            <?php echo form_error('password', '<div class="status oops">', '</div>');?>
                                <input type="password" name="password"size="40" placeholder="Contraseña*"value="<?php echo set_value('password'); ?>">
                            </p>
                            <p><button type="submit" class="form-submit">Entrar</button></p>
                        </form>
                    </div>
                </div>

            </article>
            <div class="border"></div>

        </section>
    </div><!-- /main-wrap -->
</div><!-- /wrap -->