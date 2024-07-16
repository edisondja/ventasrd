<?php
/* Smarty version 5.1.0, created on 2024-07-16 04:50:20
  from 'file:back_office_components/menu_backoffice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6695dfecce5a65_98194393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ca59c3904e5c93c7301cee12726725eb2ad777' => 
    array (
      0 => 'back_office_components/menu_backoffice.tpl',
      1 => 1721098218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6695dfecce5a65_98194393 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
?><nav class="col-md-2 col-12 mb-4 mb-md-0 menu-container" style="height: 500px;">
<div class="menu-title"><img class="imagenPerfil" src="<?php echo $_smarty_tpl->getValue('foto_perfil');?>
"/> Herramientas</div>
<ul class="nav flex-column">


    <li class="nav-item">
        <a class="nav-link" style="cursor: pointer;"  data-bs-toggle="modal" data-bs-target="#enviar_correo">Correo Masivo
        <i class="fas fa-paper-plane"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="backcoffe.php?option=reports">Reportes
        <i class="fa-solid fa-flag"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="backcoffe.php?option=users">Usuarios
            <i class="fa-solid fa-user fa-lg"></i>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="backcoffe.php?option=boards">Publicaciones
        <i class="fa-solid fa-photo-film"></i>        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="backcoffe.php?option=settings">Configuraciones
        <i class="fa-solid fa-gear"></i>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="#">Logout
        <i class="fas fa-bell"></i>

        </a>
    </li>
</ul>
</nav><?php }
}
