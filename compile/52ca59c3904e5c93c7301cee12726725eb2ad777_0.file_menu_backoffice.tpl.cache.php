<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:30
  from 'file:back_office_components/menu_backoffice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f751e3101e7_32603122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ca59c3904e5c93c7301cee12726725eb2ad777' => 
    array (
      0 => 'back_office_components/menu_backoffice.tpl',
      1 => 1718573736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666f751e3101e7_32603122 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
$_smarty_tpl->getCompiled()->nocache_hash = '819675594666f751e30a400_28193331';
?>
<nav class="col-md-2 col-12 mb-4 mb-md-0 menu-container">
<div class="menu-title"><img class="imagenPerfil" src="<?php echo $_smarty_tpl->getValue('foto_perfil');?>
"/> Herramientas</div>
<ul class="nav flex-column">


    <li class="nav-item">
        <a class="nav-link" style="cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#enviar_correo">Correo Masivo</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="backcoffe.php?option=">Usuarios</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Publicaciones</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
    </li>
</ul>
</nav><?php }
}
