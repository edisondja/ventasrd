<?php
/* Smarty version 5.1.0, created on 2024-06-23 00:51:09
  from 'file:back_office_components/modulo_usuario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6677555d79aa24_64640592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068e62321e2bf2bf57e044d591293517c63e3f74' => 
    array (
      0 => 'back_office_components/modulo_usuario.tpl',
      1 => 1719095725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6677555d79aa24_64640592 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
?><style>
    .content-container {
        margin-top: 50px;
        padding: 30px;
        background-color: #495057;
        border-radius: 10px;
    }
    h3 {
        margin-bottom: 30px;
    }
    .flex-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .checkbox-p {
        margin-right: 10px;
    }
    .table-dark th, .table-dark td {
        color: #f8f9fa;
    }
    .table-dark th {
        background-color: #6c757d;
    }
    .table-dark td {
        background-color: #495057;
    }
</style>

<div class="col-md-8 col-12 content-container mx-auto">
    <input type="search" class="form-control mb-4" id="search" placeholder="Busca lo que deseas">
    <hr/>

    <h3 style="color: aliceblue;">Buscar usuarios</h3>

    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Tipo de usuario</th>
            <th>Foto</th>
            <th>Block</th>
            <th>Enviar Correo</th>
        </tr>
    </thead>
        <tbody id="data_usuario">
            
        </tbody>
    </table>

</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('dominio');?>
/js/back_office.js"><?php echo '</script'; ?>
><?php }
}
