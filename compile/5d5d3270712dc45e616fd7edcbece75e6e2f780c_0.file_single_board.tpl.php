<?php
/* Smarty version 5.1.0, created on 2024-05-21 07:38:15
  from 'file:single_board.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_664c33470e7317_24900407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d5d3270712dc45e616fd7edcbece75e6e2f780c' => 
    array (
      0 => 'single_board.tpl',
      1 => 1716269892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_664c33470e7317_24900407 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?>
    <div class="col-md-3">
        <br/>
            <svg class="bd-placeholder-img rounded float-start" style="width:100%;display:none;"
            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 200x200" 
            preserveAspectRatio="xMidYMid slice" 
            focusable="false"><title>Placeholder</title><rect width="100%" 
            height="100%" fill="#868e96"></rect><text x="3%" y="50%" 
            fill="#dee2e6" dy=".3em">La publicidad sera colocada aca 200x200</text></svg>
        </div> 
        <div class="col-md-6">
            <br/>
            <div class="card text-white bg-dark mb-3">
            <div class="card-body" style=''>
                <input type='hidden' value='<?php echo $_smarty_tpl->getValue('id_tablero');?>
' id='id_tablero'/>
                <?php if ($_smarty_tpl->getValue('user_session') != '') {?>
           
                    <input type='hidden' value='<?php echo $_smarty_tpl->getValue('user_session');?>
' id='usuario'/>
                    <input type='hidden' value='<?php echo $_smarty_tpl->getValue('foto_perfil');?>
' id='foto_url'/>
                <?php } else { ?>
                    <input type='hidden' value='0' id='id_usuario'/>
                    <input type='hidden' value='0' id='usuario'/>
                    <input type='hidden' value='0' id='foto_url'/>
                <?php }?>
                <img src="<?php echo $_smarty_tpl->getValue('foto_usuario');?>
" alt="<?php echo $_smarty_tpl->getValue('usuario');?>
" style="border-radius:100px;width:50px;height:50px;margin:5px;">
                <strong><?php echo $_smarty_tpl->getValue('usuario');?>
</strong>
                <h5 class="card-title"><?php echo $_smarty_tpl->getValue('titulo');?>
</h5>  
                <p class="card-text" style='margin-top:3px;' id='descripcion'><?php echo $_smarty_tpl->getValue('descripcion');?>
</p>
               
                <img src="" class="img-fluid card-img-top" style='' />
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                <?php if ($_smarty_tpl->getValue('multimedias_t')) {?>
                    <div class="carousel-item active">
                        <img src="<?php echo $_smarty_tpl->getValue('og_imagen');?>
"  style='height:340px'class="d-block w-100 d-block w-100 img-fluid card-img-top" alt="...">

                    </div>
                
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('multimedias_t'), 'multimedia');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('multimedia')->value) {
$foreach0DoElse = false;
?>
                         
                        <?php if ($_smarty_tpl->getValue('multimedia')['tipo_multimedia'] == 'imagen') {?>

                            <div class="carousel-item">
                                <img src="<?php echo $_smarty_tpl->getValue('dominio');?>
/<?php echo $_smarty_tpl->getValue('multimedia')['ruta_multimedia'];?>
"  style='height:340px' class="d-block w-100 d-block w-100 img-fluid card-img-top" alt="...">
                            </div>
                        <?php } else { ?>-
                            <div class="carousel-item">
                                <video src="<?php echo $_smarty_tpl->getValue('dominio');?>
/<?php echo $_smarty_tpl->getValue('multimedia')['ruta_multimedia'];?>
" style='height:340px' class="d-block w-100 img-fluid card-img-top" style="width:330px;height:220px;"  controls></video>
                            </div>
                        <?php }?>
                              
        
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

             
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                       

                 <div class="card" style="margin-top: 2%;background: #2e3633;">
                <ul class="list-group list-group-flush">
            <?php }?>  
                    <li class="list-group-item" style='margin-left:85%; display:none;' id='cerrar_comentarios'>
                        <svg style='color:#515151;' xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                     </li>
                </ul>
                </div>
                <div class="card" id="coments" style="margin-top: 2%;">
                <ul class="list-group list-group-flush" id='data_coments'>
                    
                </ul>
                </div>
                <div class="card" style="margin-top: 2%;">
                
                <ul class="list-group list-group-flush">
                   <?php if ($_smarty_tpl->getValue('id_user') != '') {?>
                    <div id="interface_og " style=""></div>
                    <div class="list-group-item flex-container barContentComent fixed-bottom">
                        
                        <img src="<?php echo $_smarty_tpl->getValue('foto_perfil');?>
" class="rounded" style="margin: 2px;width:34px;height:38px;"> 
                      

                        <textarea id="text_coment"  class='textComent'style="width:65%;" rows='1' cols='25' placeholder='write a comment'></textarea>
                        <svg  style='height: 35px;margin: 2px;'id='send_coment' xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </div>
                    <?php } else { ?>
                       <li class="list-group-item">
                           <a href=''>i want comment need a account now</a>
                        <div id='send_coment' style='display:none' ></div>
                    <?php }?>
                </ul>
                </div>

              

           
                
            </div>
            </div><br/>

    </div> 


    
        <?php echo '<script'; ?>
 type="text/javascript" src='js/single_board.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src='js/action_coments.js'><?php echo '</script'; ?>
>

         -
    


<?php }
}
