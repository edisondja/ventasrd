<?php
/* Smarty version 5.1.0, created on 2024-06-21 02:48:52
  from 'file:back_office_components/enviar_correo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6674cdf49027e9_83397507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb10a0bcd40235cb83de1d1b2fd643263464dbec' => 
    array (
      0 => 'back_office_components/enviar_correo.tpl',
      1 => 1718573810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6674cdf49027e9_83397507 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
?>

<div class="modal fade" id="enviar_correo" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
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
</div>
<?php }
}
