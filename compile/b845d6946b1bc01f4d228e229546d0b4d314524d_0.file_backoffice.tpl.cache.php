<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:30
  from 'file:backoffice.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f751e085a61_05150970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b845d6946b1bc01f4d228e229546d0b4d314524d' => 
    array (
      0 => 'backoffice.tpl',
      1 => 1718574140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:back_office_components/menu_backoffice.tpl' => 1,
    'file:back_office_components/enviar_correo.tpl' => 1,
    'file:back_office_components/modulo_usuario.tpl' => 1,
  ),
))) {
function content_666f751e085a61_05150970 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
$_smarty_tpl->getCompiled()->nocache_hash = '743809225666f751e076663_49000553';
?>

        <?php $_smarty_tpl->renderSubTemplate('file:back_office_components/menu_backoffice.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php $_smarty_tpl->renderSubTemplate('file:back_office_components/enviar_correo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php if ($_smarty_tpl->getValue('option') == 'usuarios') {?>  

            <?php $_smarty_tpl->renderSubTemplate('file:back_office_components/modulo_usuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php } elseif ($_smarty_tpl->getValue('option') == 'publicaciones') {?>
            <!-- Aqui se coloca el modulo de ver los posts de los usuarios-->

        <?php } elseif ($_smarty_tpl->getValue('option') == 'configuraciones') {?>
            
            <!-- Aqui se coloca el modulo de ver los posts de los usuarios-->
        

        <?php }?>


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
