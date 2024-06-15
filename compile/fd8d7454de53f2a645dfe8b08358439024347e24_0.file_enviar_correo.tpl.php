<?php
/* Smarty version 5.1.0, created on 2024-06-12 03:02:11
  from 'file:enviar_correo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6668f3933296e4_46522560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd8d7454de53f2a645dfe8b08358439024347e24' => 
    array (
      0 => 'enviar_correo.tpl',
      1 => 1718154129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6668f3933296e4_46522560 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><div class="modal fade" id="enviar_correo" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Mensaje de Correo Masivo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="mb-3">
                <label for="mensaje" class="form-label">Redacte el correo que desea enviar.</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <label for="mensaje" class="form-label">Se enviara un correo de manera masiva a todos los Usuarios
                registrado en la plataforma.
            </label>

            <button type="submit" class="btn btn-primary w-100" id="enviar">Enviar</button>
        </div>
    </div>
</div>
</div><?php }
}
