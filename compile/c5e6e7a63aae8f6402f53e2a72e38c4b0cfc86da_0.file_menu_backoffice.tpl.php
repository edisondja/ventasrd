<?php
/* Smarty version 5.1.0, created on 2024-06-15 22:28:06
  from 'file:menu_backoffice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666df956d191f0_40646883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5e6e7a63aae8f6402f53e2a72e38c4b0cfc86da' => 
    array (
      0 => 'menu_backoffice.tpl',
      1 => 1718483283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666df956d191f0_40646883 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><nav class="col-md-2 col-12 mb-4 mb-md-0 menu-container">
<div class="menu-title"><img class="imagenPerfil" src="<?php echo $_smarty_tpl->getValue('foto_perfil');?>
"/> Herramientas</div>
<ul class="nav flex-column">


    <li class="nav-item">
        <a class="nav-link" style="cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#enviar_correo">Correo Masivo</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Usuarios</a>
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
