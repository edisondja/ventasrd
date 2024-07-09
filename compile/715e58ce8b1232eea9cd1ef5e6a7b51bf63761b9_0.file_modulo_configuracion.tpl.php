<?php
/* Smarty version 5.1.0, created on 2024-07-09 04:11:31
  from 'file:back_office_components/modulo_configuracion.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_668c9c533f6799_32751783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '715e58ce8b1232eea9cd1ef5e6a7b51bf63761b9' => 
    array (
      0 => 'back_office_components/modulo_configuracion.tpl',
      1 => 1720491089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_668c9c533f6799_32751783 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
?>
<div class="col-md-8 col-12 content-container mx-auto tabla_buscar">
<div class="container mt-5">
<input type="hidden" id="modulo_select" value="config"/>
<h2>Configuración del Sitio <i class="fa-solid fa-gears"></i></h2>
<select class="" id="search" style="float: right;">
    <option value="1">Configuracion del sitio</option>
    <option value="2">Configuracion Avanzada</option>

</select><hr/>
<div>
    <div class="form-group">
        <label for="nombre_sitio">Nombre del Sitio</label>
        <input type="text" class="form-control" id="nombre_sitio" name="nombre_sitio" maxlength="150" placeholder="Ingrese el nombre del sitio">
    </div>
    <div class="form-group">
        <label for="descripcion_slogar">Descripción del Slogan</label>
        <textarea class="form-control" id="descripcion_slogar" name="descripcion_slogar" rows="3" placeholder="Ingrese la descripción del slogan"></textarea>
    </div>
    <div class="form-group">
        <label for="descripcion_sitio">Descripción del Sitio</label>
        <textarea class="form-control" id="descripcion_sitio" name="descripcion_sitio" rows="3" placeholder="Ingrese la descripción del sitio"></textarea>
    </div>
    <div class="form-group">
        <label for="favicon">Subir Favicon</label>
        <input type="file" class="form-control" id="favicon" name="favicon" maxlength="200" placeholder="Ingrese el URL del favicon">
    </div>
    <div class="form-group">
        <label for="sitio_logo">Subir Logo</label>
        <input type="file" class="form-control" id="sitio_logo" name="sitio_logo" maxlength="200" placeholder="Ingrese el URL del logo del sitio">
    </div>
    <div class="form-group">
        <label for="copyright_descripcion">Descripción de Copyright</label>
        <textarea class="form-control" id="copyright_descripcion" name="copyright_descripcion" rows="3" placeholder="Ingrese la descripción del copyright"></textarea>
    </div>
    <div class="form-group">
        <label for="email_sitio">Email del Sitio</label>
        <input type="email" class="form-control" id="email_sitio" name="email_sitio" maxlength="180" placeholder="Ingrese el email del sitio">
    </div>
    <div class="form-group">
        <label for="busqueda_descripcion">Descripción de Búsqueda</label>
        <textarea class="form-control" id="busqueda_descripcion" name="busqueda_descripcion" rows="3" placeholder="Ingrese la descripción de búsqueda"></textarea>
    </div>
    <div class="form-group">
        <label for="pagina_descripcion">Descripción de la Página</label>
        <textarea class="form-control" id="pagina_descripcion" name="pagina_descripcion" rows="3" placeholder="Ingrese la descripción de la página"></textarea>
    </div>
    <div class="form-group">
        <label for="titulo_descripcion">Descripción del Título</label>
        <textarea class="form-control" id="titulo_descripcion" name="titulo_descripcion" rows="3" placeholder="Ingrese la descripción del título"></textarea>
    </div>
    <div class="form-group">
        <label for="busqueda_hastag">Hashtags de Búsqueda</label>
        <input type="text" class="form-control" id="busqueda_hastag" name="busqueda_hastag" placeholder="Ingrese los hashtags de búsqueda">
    </div><hr/>
    <div style="text-align: center;">
        <button type="submit" id="guardar_config" class="btn btn-dark">Guardar Configuración</button>
    </div>
  </div>
</div>




<style>
body {
    background-color: #343a40; /* Dark background */
    color: white; /* White text */
}
.form-control {
    background-color: #495057;
    color: white;
}
.form-control::placeholder {
    color: #ced4da;
}
</style>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('dominio');?>
/js/back_office.js"><?php echo '</script'; ?>
><?php }
}
