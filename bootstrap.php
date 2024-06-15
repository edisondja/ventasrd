<?php

    session_start();
   // session_destroy();
    require_once('vendor/autoload.php');
    require_once('config/config.php');
    require_once('Models/User.php');
    require_once('Models/Board.php');
  

    $dominio = DOMAIN;
    $libs = include("libs/connect_cdn.php");
    $smarty = new \Smarty\Smarty;
    $smarty->setTemplateDir('template');
    $smarty->debugging = true;
   // $smarty->caching = true;
    $smarty->setConfigDir('config');
    $smarty->setCompileDir('compile');
    $smarty->setCacheDir('cache');
    $smarty->assign('name',NAME_SITE);
    $smarty->assign('logosite',LOGOSITE);
    $smarty->assign('dominio',DOMAIN);
    $smarty->assign('copyright',COPYRIGHT_DESCRIPTION);

    if(isset($_SESSION['id_user'])){

        $smarty->assign('id_user',$_SESSION['id_user']);
        $smarty->assign('foto_perfil',$dominio."/".$_SESSION['foto_url']);
        $smarty->assign('user_session',$_SESSION['usuario']);  
        $smarty->assign('type_user',$_SESSION['type_user']);

       
    }else{

        $smarty->assign('type_user','');
        $smarty->assign('id_user','');
        $smarty->assign('foto_perfil','');
        $smarty->assign('user_session','');

    }
    /*
        load cdns
    */
    $libs_string='';
    foreach($libs as $lib){

        $libs_string.=$lib."\r";

    }


    $smarty->assign('libs_cdn',$libs_string);

?>