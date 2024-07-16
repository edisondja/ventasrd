<?php

    session_start();
   // session_destroy();
    require_once 'vendor/autoload.php';
    require_once 'config/config.php';
    require_once 'Models/User.php';
    require_once 'Models/Board.php';
    require_once 'Models/Config.php';

    $dominio = DOMAIN;
    $libs = include 'libs/connect_cdn.php';
        /*
        load cdns
    */
    $libs_string = '';
    foreach ($libs as $lib) {
        $libs_string .= $lib."\r";
    }

    $smarty = new \Smarty\Smarty();
    $smarty->setTemplateDir('template');
  //  $smarty->debugging = true;
//    $smarty->caching = true;
    $smarty->setConfigDir('config');
    $smarty->assign('libs_cdn', $libs_string);
    $smarty->setCompileDir('compile');
    $smarty->setCacheDir('cache');
    //Verificar si existe cofinguracion en la base de datos 

    $configuracion = new Config();

    if($configuracion->VerificarConfiguracion()>0){
        /*
            Si existe una configuracion registrada en la base de 
            datos se cargaran en lugar de tomarse desde el archivo
            de cofiguracion estatico /config/congfig.php.
        */

        $config_data = $configuracion->Cargar_configuracion('asoc');
        $smarty->assign('name',$config_data->nombre_sitio);
        $smarty->assign('logosite',$config_data->sitio_logo_url);
        $smarty->assign('copyright', $config_data->copyright_descripcion);
        $smarty->assign('favicon',$config_data->favicon_url);
        $smarty->assign('email_sitio',$config_data->email_sitio);


    }else{

        /*
            Cargando configuracion desde archivo 
            estatico.
        */

        $smarty->assign('name', NAME_SITE);
        $smarty->assign('logosite', LOGOSITE);
        $smarty->assign('copyright', COPYRIGHT_DESCRIPTION);

    }





    $smarty->assign('dominio', DOMAIN);
    if (isset($_SESSION['id_user'])) {
        $smarty->assign('id_user', $_SESSION['id_user']);
        $smarty->assign('foto_perfil', $dominio.'/'.$_SESSION['foto_url']);
        $smarty->assign('user_session', $_SESSION['usuario']);
        $smarty->assign('type_user', $_SESSION['type_user']);
    } else {
        $smarty->assign('type_user', '');
        $smarty->assign('id_user', '');
        $smarty->assign('foto_perfil', '');
        $smarty->assign('user_session', '');
    }
