<?php
/* Smarty version 5.1.0, created on 2024-06-15 22:11:39
  from 'file:backoffice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666df57b601ab9_35318746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b845d6946b1bc01f4d228e229546d0b4d314524d' => 
    array (
      0 => 'backoffice.tpl',
      1 => 1718482292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu_backoffice.tpl' => 1,
    'file:enviar_correo.tpl' => 1,
  ),
))) {
function content_666df57b601ab9_35318746 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?>
<div class="container-fluid">
<div class="row">
    <?php $_smarty_tpl->renderSubTemplate('file:menu_backoffice.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate('file:enviar_correo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <style>

</style>

<div class="col-md-8 col-12 content-container mx-auto">
    <input type="search" class="form-control mb-4" placeholder="Busca lo que deseas">
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

    
</div>
</div>

<style>
    .content-container {
        margin-top: 50px;
        padding: 30px;
        background-color:#1a1c1d;
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
</style><?php }
}
