<?php
/* Smarty version 5.1.0, created on 2024-06-22 04:07:16
  from 'file:registrer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_667631d459ede0_84700983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ecbbb223c6e6d317dec4e23e764eea135681df' => 
    array (
      0 => 'registrer.tpl',
      1 => 1716857571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667631d459ede0_84700983 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\ventasrd\\template';
?><div class="col-md-3"></div>

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
            <label for="name"><strong>Sexo</strong></label>
            <select name="sex" class="form-control">
                    <option value='h'>Hombre</option>
                    <option value='m'>Mujer</option>
            </select>
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

    


<?php }
}
