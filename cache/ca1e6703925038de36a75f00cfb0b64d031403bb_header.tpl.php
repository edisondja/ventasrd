<?php
/* Smarty version 5.1.0, created on 2024-06-21 02:44:11
  from 'file:template/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6674ccdb1273f8_22999158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1e6703925038de36a75f00cfb0b64d031403bb' => 
    array (
      0 => 'template/header.tpl',
      1 => 1718581817,
      2 => 'file',
    ),
    '102d20fa45446b3aad48be0482ed15befd2c5b20' => 
    array (
      0 => 'login.tpl',
      1 => 1716680146,
      2 => 'file',
    ),
    '44e99cb69e2d26c722fcfe569644e2b2d19f16cb' => 
    array (
      0 => 'update_user.tpl',
      1 => 1717085550,
      2 => 'file',
    ),
    'c0a595b01c678dd0117d2e2fa30d32cef4e8f9fe' => 
    array (
      0 => 'board.tpl',
      1 => 1718478874,
      2 => 'file',
    ),
    '8ee7eef05d4e2d2693a95aa6d7e45943853f5ba3' => 
    array (
      0 => 'footer.tpl',
      1 => 1715445650,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_6674ccdb1273f8_22999158 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>The best boards Ventas RD</title>
        <meta name="description" content="Ventas RD platform free for all to share your contents">
        <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
        <meta http-equiv="Content-Language" content="en-US">
        <meta name="Robots" content="all"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

        <!-- ETIQUETAS TWITER -->
        <meta name="twitter:card" content="http://localhost/ventasrd/assets/ventasRD.png" >
        <meta name="twitter:site" content="Ventas RD">
        <meta name="twitter:title" content="The best boards Ventas RD" >
        <meta name="twitter:description" content="Ventas RD platform free for all to share your contents" >
        <meta name="twitter:image" content="http://localhost/ventasrd/assets/ventasRD.png" >
        <meta name="twitter:url" content="http://localhost/ventasrd/" >

        <!-- ETIQUETAS FACEBOOK -->
        <meta property="og:image" content="http://localhost/ventasrd/assets/ventasRD.png">
        <meta property="og:video" content="">
        <meta property="og:title" content="The best boards Ventas RD">
        <meta property="og:url" content="http://localhost/ventasrd/">
        <meta property="og:description" content="Ventas RD platform free for all to share your contents">
        <meta property="og:site_name" content="Ventas RD">
        <meta name="google" value="notranslate">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=""/>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script><script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/><link rel='stylesheet' href='http://localhost/ventasrd/controllers/css/main.css'/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><script src='http://localhost/ventasrd/js/paginar_tableros.js'></script><script src='http://localhost/ventasrd/js/BoardOperation.js'></script><script src='http://localhost/ventasrd/js/back_office.js'></script>

  </head>
  <body style='background:#1e1e23;'>
    <input type='hidden' value='http://localhost/ventasrd' id='dominio'/> 
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#18171f;">
    
        <div class="container-fluid">

          <a class="navbar-brand" style="color: #09b9e1;"  href="http://localhost/ventasrd"><img src='http://localhost/ventasrd/assets/ventasRD.png' /><strong style='color:#ebebeb; font-size:15px;'></strong>
          </a>    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
                                 <input type='hidden' value='' id='foto_perfil'/>
                   <input type='hidden' value='0' class='user_update'/>

                  <input type='hidden' value='' id='nombre_usuario'/>
               
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
            
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                                         <li class="dropdown-item" data-bs-toggle="modal" data-bs-target="#loginModal" style='cursor:pointer'>Login</li>
                       <a href="registrer.php" style='text-decoration:none;'>
                       <li class="dropdown-item"  style='cursor:pointer'>Registrer</li>
                       </a>
                                   
                </ul>
              </li>
            </ul>
       
          </div>
              <form  method='get' action='index.php'>
                    <table style='margin-left:30px;' >
                        <tr>
                            <td><input type='search' name='search'' class='form-control' placeholder='write the name of table'/></td>
                            <td><button class='btn btn-dark'>Search</button></td>
                        </tr>
                    </table>
                
              </form>

        </div>

      
      </nav>
      <div class="container-fluid">
            <div class="row" id="boards">  <hr/>
              <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" required>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="clave" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="clave" name="clave" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary w-100" id="login">Iniciar Sesión</button>
            </div>
        </div>
    </div>
</div>              <!-- Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Actualizar Datos de Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="updateUserForm">
                    <!-- Otros Datos -->
                    <fieldset class="mb-3">
                        <legend>Foto y Biografia</legend>
                        <div class="mb-3">
                            <label for="foto_url" class="form-label">Imagen de perfil</label>
                            <input type="file" class="form-control" id="foto_url" name="foto_url">
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        </div>
                    </fieldset>

                    <!-- Información Personal -->
                    <fieldset class="mb-3">
                        <legend>Información Personal</legend>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario_form" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                    </fieldset>

                    <!-- Submit Button -->
                    <button type="submit" id="update_changes" class="btn btn-primary w-100">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Post this content</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                  <table>
                                  
                                      <tr>
                                          <td><img src='' style='height:50px;width:50px;border-radius:100px;'>&nbsp;</td>
                                          <td></td>
                                      </tr>
                                  </table><hr/>
                                  <div class='card-body'>
                                      <textarea class='form-control' id="board_title" rows='5'></textarea>
                                  </div><hr/>
                                  <div class="flex-container">
                                  <progress id="file" style="display:none" class="progress"  max="100" value="0"></progress>
                                      <strong style="margin-top: -3.4px; display:none" id="porcentaje">&nbsp;0%</strong>
                                  </div>
                                  <div id='multimedia_view' class='flex-container'>
                                    
                                  </div>  
                        </div>
                        <div class="modal-footer">
                              <input   accept="image/png,image/jpeg,video/*,audio/*" type='file' id='upload_images' style='display:none' multiple name="imagenes[]" />

                             <table class='table'>
                                      <tr>
                                        <td style='width:5%;cursor:pointer;'>
                                        <svg id="upload_image" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                          <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                          <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                                          </svg>
                                          <svg style='margin:5px;' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-gif" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2H9v-1h3a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.278 13.124a1.403 1.403 0 0 0-.14-.492 1.317 1.317 0 0 0-.314-.407 1.447 1.447 0 0 0-.48-.275 1.88 1.88 0 0 0-.636-.1c-.361 0-.67.076-.926.229a1.48 1.48 0 0 0-.583.632 2.136 2.136 0 0 0-.199.95v.506c0 .272.035.52.105.745.07.224.177.417.32.58.142.162.32.288.533.377.215.088.466.132.753.132.268 0 .5-.037.697-.111a1.29 1.29 0 0 0 .788-.77c.065-.174.097-.358.097-.551v-.797H1.717v.589h.823v.255c0 .132-.03.254-.09.363a.67.67 0 0 1-.273.264.967.967 0 0 1-.457.096.87.87 0 0 1-.519-.146.881.881 0 0 1-.305-.413 1.785 1.785 0 0 1-.096-.615v-.499c0-.365.078-.648.234-.85.158-.2.38-.301.665-.301a.96.96 0 0 1 .3.044c.09.03.17.071.236.126a.689.689 0 0 1 .17.19.797.797 0 0 1 .097.25h.776Zm1.353 2.801v-3.999H3.84v4h.79Zm1.493-1.59v1.59h-.791v-3.999H7.88v.653H6.124v1.117h1.605v.638H6.124Z"/>
                                          </svg>
                                        </td>
                                      
                                      </td>
                                    </tr>
                              </table>
                              <button class="btn btn-dark" id='post'>POST</button>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board97">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=97/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Me encantan estas imágenes que dicen ustedes amigos?​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=97/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=97/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1718580649.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board96">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=96/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>todo bien en casa​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=96/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=96/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board95">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=95/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>todo bien en casa?​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=95/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=95/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board93">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=93/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>veamos que nos dice​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=93/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=93/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717942698.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board90">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=90/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>La jefatura​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=90/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=90/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717938558.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board88">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=88/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Si hay planificación hay todo​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=88/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=88/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717933726.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board86">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=86/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>eso es asi amigos​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=86/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=86/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717933180.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board85">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=85/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>prueba asi  a ver que pasa​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=85/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=85/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board84">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=84/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>ademas dejame probar con esto a ver que pasa​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=84/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=84/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717932638.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board83">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=83/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>otras cosillas mas ricas para publicar​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=83/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=83/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717932408.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board82">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=82/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Algunos elmentos de justicias establecidos​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=82/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=82/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717932229.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board80">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=80/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>probando esto es cool​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=80/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=80/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717931834.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board79">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=79/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Compartiendo estos argumentos.​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=79/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=79/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717899013.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board78">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=78/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>publicando un video​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=78/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=78/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board77">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=77/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Esta son las vueltas​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=77/">
                                                      
                            <a href="http://localhost/ventasrd/single_board.php?id=77/">
                            <img src="http://localhost/ventasrd//imagenes_tablero/1717898607.jpg" class="card-img-top" alt="...">
                            </a>

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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board35">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=35/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>la vida es un viaje sabian eso/​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=35/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=35/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board21">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=MisterCoca'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/665d012ccddb3.png'/></a>
                          Mauricio Gonzales 
                          <a href="http://localhost/ventasrd/single_board.php?id=21/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Quiero un chin de valler mi gente ustedes tan caclaro verdad?​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=21/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=21/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board20">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=MisterCoca'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/665d012ccddb3.png'/></a>
                          Mauricio Gonzales 
                          <a href="http://localhost/ventasrd/single_board.php?id=20/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>Vape RD la mejor tienda de santo domingo Oeste mmgs​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=20/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=20/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board19">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=MisterCoca'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/665d012ccddb3.png'/></a>
                          Mauricio Gonzales 
                          <a href="http://localhost/ventasrd/single_board.php?id=19/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>a mi tambien me gusta droga y cual es el problema con eso
amigos?​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=19/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=19/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                      
                        


<div class="col-sm-3">
</div>
<div class="col-sm-5" style='margin-bottom:15px;'>

           <div class='card text-white bg-dark mb-3' id="board18">
       
            
                      <div class='body' style='padding:5px'>
                        <div class='title'><strong><a href='http://localhost/ventasrd//profile_user.php?user=edbellaco'> <img class='imagenPerfil' src='http://localhost/ventasrd//images/666117b6cf373.png'/></a>
                          Sir.Edison De jesus 
                          <a href="http://localhost/ventasrd/single_board.php?id=18/">
                          <i class="fa-solid fa-highlighter"></i></strong></div>
                          </a>
                         
                        <p style='padding-left: 10px;'>El mejor hombre de todos los tiempos​</p>
                        <a href="http://localhost/ventasrd/single_board.php?id=18/">
                          
                            <a href="http://localhost/ventasrd/single_board.php?id=18/">
                            </a>
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
                                                                                            </div>
                        </div>
                </div>
</div>
<div class="col-sm-3"></div>
                    
                                                          
            
                          <nav aria-label="Page navigation example" >
                <ul class="pagination"  style="margin-left:30%; margin-top:5px">
                  <li class="page-item" id='retroceder'>
                    <a class="page-link"  style='cursor:pointer' aria-label="Next">
                      <span aria-hidden="true" >Back</span>
                    </a>
                  </li>
                  <li class="page-item" id='avanzar'>
                    <a class="page-link" style='cursor:pointer' aria-label="Next">
                      <span aria-hidden="true" >Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <input type='hidden' id='pagina' value='0'/>
                        <br><hr>
            <footer class="bg-dark text-center text-white">
          
              
            </footer>
      </div> 
  </body>
</html>                  

            </div>
    
<?php }
}
