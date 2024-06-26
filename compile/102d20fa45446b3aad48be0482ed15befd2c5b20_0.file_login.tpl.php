<?php
/* Smarty version 5.1.0, created on 2024-06-21 02:48:41
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6674cde9cb7ea3_69467203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '102d20fa45446b3aad48be0482ed15befd2c5b20' => 
    array (
      0 => 'login.tpl',
      1 => 1716680146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6674cde9cb7ea3_69467203 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="clave" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary w-100" id="login">Iniciar Sesión</button>
            </div>
        </div>
    </div>
</div><?php }
}
