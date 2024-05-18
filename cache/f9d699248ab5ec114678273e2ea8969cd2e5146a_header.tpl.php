<?php
/* Smarty version 5.1.0, created on 2024-05-18 18:54:04
  from 'file:../template/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6648dd2c7e2993_71828998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d699248ab5ec114678273e2ea8969cd2e5146a' => 
    array (
      0 => '../template/header.tpl',
      1 => 1716050889,
      2 => 'file',
    ),
    'a7ecbbb223c6e6d317dec4e23e764eea135681df' => 
    array (
      0 => 'registrer.tpl',
      1 => 1716048254,
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
function content_6648dd2c7e2993_71828998 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <title>Registrer user Ventas RD</title>
        <meta name="description" content="Ventas RD plataform free for alls share your contents">
        <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
        <meta http-equiv="Content-Language" content="en-US">
        <meta name="Robots" content="all"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

        <!-- ETIQUETAS TWITER -->
        <meta name="twitter:card" content="http://localhost/ventasrd/assets/hotpipe.png" >
        <meta name="twitter:site" content="Ventas RD">
        <meta name="twitter:title" content="Registrer user Ventas RD" >
        <meta name="twitter:description" content="Ventas RD plataform free for alls share your contents" >
        <meta name="twitter:image" content="http://localhost/ventasrd/assets/hotpipe.png" >
        <meta name="twitter:url" content="http://localhost/ventasrd" >

        <!-- ETIQUETAS FACEBOOK -->
        <meta property="og:image" content="http://localhost/ventasrd/assets/hotpipe.png">
        <meta property="og:video" content="">
        <meta property="og:title" content="Registrer user Ventas RD">
        <meta property="og:url" content="http://localhost/ventasrd">
        <meta property="og:description" content="Ventas RD plataform free for alls share your contents">
        <meta property="og:site_name" content="Ventas RD">
        <meta name="google" value="notranslate">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content=""/>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script><script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/><link rel='stylesheet' href='http://localhost/ventasrd/controllers/css/main.css'/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /><script src='http://localhost/ventasrd/js/paginar_tableros.js'></script><script src='http://localhost/ventasrd/js/BoardOperation.js'></script>

  </head>
  <body style='background:#1e1e23;'>
    <input type='hidden' value='http://localhost/ventasrd' id='dominio'/> 
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#18171f;">
    
        <div class="container-fluid">
    
          <a class="navbar-brand" style="color: #09b9e1;"  href="http://localhost/ventasrd"><img src='http://localhost/ventasrd/assets/hotpipe.png' /><strong style='color:#ebebeb; font-size:15px;'>edbellaco</strong>
          </a>    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
                              <input type='hidden' value='http://localhost/ventasrd/yt' id='foto_perfil'/>
                <input type='hidden' value='edbellaco' id='nombre_usuario'/>
                
                  <table style='margin:5px; display:none;'>
                    <tr>
                      <td><img src='http://localhost/ventasrd/yt' style='border-radius:100px; width:35px; height:30px; margin:2px;'></td>
                      <td></td>
                    </tr>

                  </table>
                 
          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
            
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                                               <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Public Post</a></li>
                            <li><a class="dropdown-item" href="http://localhost/ventasrd/dashboard.php">Dashboard</a></li>
                            <li><a class="dropdown-item" style='cursor:pointer' id='singout'  >Sing out</a></li>
                            <li><a class="dropdown-item" href="http://localhost/ventasrd/controllers/board_profile.php">My Profile</a></li>
                            <li class="dropdown-item" style='display:none' id='login' style='cursor:pointer'>Login</li>

                                   
                </ul>
              </li>
            </ul>
       
          </div>
              <form  method='get' action='index.php'>
                    <table style='margin-left:30px; display:none;' >
                        <tr>
                            <td><input type='search' name='search'' class='form-control' placeholder='write the name of table'/></td>
                            <td><button class='btn btn-dark'>Search</button></td>
                        </tr>
                    </table>
                
              </form>

        </div>

      
      </nav>
      <div class="container-fluid">
            <div class="row">  <hr/>
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
                                          <td><img src='http://localhost/ventasrd/yt' style='height:50px;width:50px;border-radius:100px;'>&nbsp;</td>
                                          <td>edbellaco</td>
                                      </tr>
                                  </table><hr/>
                                  <div class='card-body'>
                                      <textarea class='form-control' rows='5'></textarea>
                                  </div><hr/>
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
                   
                        <div class="col-md-3"></div>

<div class="col-md-6 form-container">
    <h3 class="text-center">JOIN NOW</h3>
    
    <form method="post" action="controllers/actions_board.php">
        <div class="form-group mb-3">
            <label for="username"><strong>Username</strong></label>
            <input type="text" id="username" name="user" class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="password"><strong>Password</strong></label>
            <input type="password" id="password" name="password" class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="email"><strong>Email</strong></label>
            <input type="text" id="email" name="email" class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="name"><strong>Name</strong></label>
            <input type="text" id="name" name="name" class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="last_name"><strong>Last Name</strong></label>
            <input type="text" id="last_name" name="last_name" class="form-control" />
        </div>
        
        <div class="form-group mb-3">
            <label for="bio"><strong>Write a micro bio</strong></label>
            <textarea id="bio" name="bio" class="form-control"></textarea>
        </div>
        
        <input type="hidden" name="action" value="create_user" />
        <hr/>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Join Now</button>
        </div>
    </form>
</div>

<!-- Add the following CSS to your main stylesheet or within a <style> tag -->

    <style>
    .form-container {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .form-container h3 {
        margin-bottom: 1.5rem;
        color: #dc3545; /* Bootstrap danger color */
    }
    .form-container label {
        color: #6c757d; /* Bootstrap secondary color */
    }
    .form-container .form-control:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }
    .btn-custom {
        background-color: #dc3545;
        color: #ffffff;
        border: none;
    }
    .btn-custom:hover {
        background-color: #c82333;
    }
</style>

    


                                                          
            
                                    <br><hr>
            <footer class="bg-dark text-center text-white">
          
              
            </footer>
      </div> 
  </body>
</html>                  

            </div>
    
<?php }
}
