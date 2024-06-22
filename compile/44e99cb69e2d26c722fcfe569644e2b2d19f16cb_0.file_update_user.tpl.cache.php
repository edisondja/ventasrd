<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:29
  from 'file:update_user.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f751de7b8c6_26708884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44e99cb69e2d26c722fcfe569644e2b2d19f16cb' => 
    array (
      0 => 'update_user.tpl',
      1 => 1717085550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666f751de7b8c6_26708884 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
$_smarty_tpl->getCompiled()->nocache_hash = '75613423666f751de76201_92981881';
?>
<!-- Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Actualizar Datos de Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateUserForm">
                    <!-- Otros Datos -->
                    <fieldset class="mb-3">
                        <legend>Foto y Biografia</legend>
                        <div class="mb-3">
                            <label for="foto_url" class="form-label">Imagen de perfil</label>
                            <input type="file" class="form-control" id="foto_url" name="foto_url">
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        </div>
                    </fieldset>

                    <!-- Información Personal -->
                    <fieldset class="mb-3">
                        <legend>Información Personal</legend>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario_form" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </fieldset>

                    <!-- Submit Button -->
                    <button type="submit" id="update_changes" class="btn btn-primary w-100">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }
}
