<?php
/* Smarty version 5.1.0, created on 2024-06-17 01:28:44
  from 'file:board.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666f752cce4162_64388125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a595b01c678dd0117d2e2fa30d32cef4e8f9fe' => 
    array (
      0 => 'board.tpl',
      1 => 1718478874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666f752cce4162_64388125 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
$_smarty_tpl->getCompiled()->nocache_hash = '2082600361666f752cc0b583_94358061';
?>



<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='<?php echo $_smarty_tpl->getValue('url_board');?>
/profile_user.php?user=<?php echo $_smarty_tpl->getValue('tablero')['usuario'];?>
'> <img class='imagenPerfil' src='<?php echo $_smarty_tpl->getValue('dominio');?>
/<?php echo $_smarty_tpl->getValue('tablero')['foto_url'];?>
'/></a>
                          <?php echo $_smarty_tpl->getValue('tablero')['nombre'];?>
 <?php echo $_smarty_tpl->getValue('tablero')['apellido'];?>
 
                          <a href="<?php echo $_smarty_tpl->getValue('dominio');?>
/single_board.php?id=<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('tablero')['titulo']," ","_");?>
">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'><?php echo $_smarty_tpl->getValue('tablero')['descripcion'];?>
​</p>
                        <a href="<?php echo $_smarty_tpl->getValue('dominio');?>
/single_board.php?id=<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('tablero')['titulo']," ","_");?>
">
                          <?php if ($_smarty_tpl->getValue('tablero')['imagen_tablero'] !== '') {?>
                            
                            <a href="<?php echo $_smarty_tpl->getValue('dominio');?>
/single_board.php?id=<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('tablero')['titulo']," ","_");?>
">
                            <img src="<?php echo $_smarty_tpl->getValue('dominio');?>
/<?php echo $_smarty_tpl->getValue('tablero')['imagen_tablero'];?>
" class="card-img-top" alt="...">
                            </a>

                          <?php } else { ?>

                            <a href="<?php echo $_smarty_tpl->getValue('dominio');?>
/single_board.php?id=<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
/<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('replace')($_smarty_tpl->getValue('tablero')['titulo']," ","_");?>
">
                            </a>
                          <?php }?>
                        </a>
                      </div>
                      <p class='p'  style='padding:5px;'>
                        
                      </p>

                         <div class="card-footer" style='float:right'>
                              <div style='float:right'>
                                <i class="fa-solid fa-thumbs-up"style='display:none'></i>
                                <i class="fa-solid fa-bookmark" style='display:none'></i>
                                <i class="fa-regular fa-share-from-square" style='cursor:pointer'></i>
                                <i class="fa-regular fa-thumbs-up" style='cursor:pointer'></i>
                                <i class="fa-regular fa-comment-dots" style='cursor:pointer'></i>
                                <i class="fa-regular fa-bookmark" style='cursor:pointer'></i>
                                <?php if ($_smarty_tpl->getValue('user_session') != '') {?>
                                  <?php if ($_smarty_tpl->getValue('id_user') == $_smarty_tpl->getValue('tablero')['id_user']) {?>
                                      <i class="fa fa-trash" data-value='<?php echo $_smarty_tpl->getValue('tablero')['id_tablero'];?>
' style="cursor: pointer;" aria-hidden="true"></i>
                                  <?php }?>
                                  <?php } else { ?>
                              <?php }?>
                              </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div><?php }
}
