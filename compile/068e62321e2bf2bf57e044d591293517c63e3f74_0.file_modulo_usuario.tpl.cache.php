<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:30
  from 'file:back_office_components/modulo_usuario.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f751e5dd0f5_57516686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '068e62321e2bf2bf57e044d591293517c63e3f74' => 
    array (
      0 => 'back_office_components/modulo_usuario.tpl',
      1 => 1718574158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666f751e5dd0f5_57516686 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template\\back_office_components';
$_smarty_tpl->getCompiled()->nocache_hash = '2057266297666f751e5d6f67_98420539';
?>
<style>
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
    <input type="search" class="form-control mb-4" placeholder="Busca lo que deseas">
    <hr/>

    <h3 style="color: aliceblue;">Buscar usaurio</h3>


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
        <tbody>
            <tr>
                <td>Edison</td>
                <td>De Jesus Abreu</td>
                <td>edisondja@gmail.com</td>
                <td>admin</td>
                <td>Foto</td>
                <td>Block</td>
                <td>edisondja@gmail.com</td>
            </tr>
        </tbody>
    </table>
</div>
<?php }
}
