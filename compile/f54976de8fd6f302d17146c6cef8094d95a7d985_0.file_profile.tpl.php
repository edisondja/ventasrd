<?php
/* Smarty version 5.1.0, created on 2024-05-21 06:46:19
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664c271b117668_38914900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f54976de8fd6f302d17146c6cef8094d95a7d985' => 
    array (
      0 => 'profile.tpl',
      1 => 1716266759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:board.tpl' => 1,
  ),
))) {
function content_664c271b117668_38914900 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?>      <div class="col-md-3">
            <br/>
            
                    <?php if ($_smarty_tpl->getValue('user_session') != '') {?>
                        <input type='hidden' value='<?php echo $_smarty_tpl->getValue('id_user');?>
' id='id_usuario'/>
                        <input type='hidden' value='<?php echo $_smarty_tpl->getValue('user_session');?>
' id='usuario'/>
                        <input type='hidden' value='<?php echo $_smarty_tpl->getValue('foto_perfil');?>
' id='foto_url'/>
                    <?php } else { ?>
                        <input type='hidden' value='0' id='id_usuario'/>
                        <input type='hidden' value='0' id='usuario'/>
                        <input type='hidden' value='0' id='foto_url'/>
                    <?php }?>
                <svg class="bd-placeholder-img rounded float-start" style="width:100%;display:none;"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 200x200" 
                preserveAspectRatio="xMidYMid slice" 
                focusable="false"><title>Placeholder</title><rect width="100%" 
                height="100%" fill="#868e96"></rect><text x="3%" y="50%" 
                fill="#dee2e6" dy=".3em">La publicidad sera colocada aca 200x200</text></svg>
        </div> 
        <div class="col-md-6">
                <div class="card" style='padding:20px;'>
                <div>
                    <table >
                        <tr>
                            <td><img src='<?php echo $_smarty_tpl->getValue('dominio');?>
/<?php echo $_smarty_tpl->getValue('data_profile')->foto_url;?>
' style='margin:5px;height:100px;width:100px;border-radius:100px'/></td>
                            <td>
                            <strong style='margin:auto'><?php echo $_smarty_tpl->getValue('data_profile')->usuario;?>
 <i class="fa-solid fa-square-check" style='color:#1bd093'></i>
                            </strong>
                            <p>Followers 485,000 m</p>
                            <button class='btn btn-dark fa-solid fa-user-plus'></button>
                            </td>
                            <td>
                                
                            </td>
                            <i class="fa-regular fa-sun" style='float:right;cursor:pointer'></i>
                            
                        </tr>
                         <tr>
                          
                        </tr>
                    </table>
                
                    <p style='margin:auto;text-align: -webkit-center;color:#190d0d'><?php echo $_smarty_tpl->getValue('data_profile')->bio;?>
 
                    </p>
          
        </div>

        </div>
    </div>


    </div> <br/>
     <div class='row'>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('boards'), 'tablero');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('tablero')->value) {
$foreach1DoElse = false;
?>
                            
                            <?php $_smarty_tpl->renderSubTemplate("file:board.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

        </div><br/>
             
    
    
        <?php echo '<script'; ?>
 type="text/javascript" src=''><?php echo '</script'; ?>
>
    


<?php }
}
