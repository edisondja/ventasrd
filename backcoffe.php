<?php
   
   require('bootstrap.php');
   


    if(isset($_SESSION['id_user'])){

        if($_SESSION['type_user']=='admin'){

            //Si el usuario es admin solo asi puede entrar al BackOffice
                            
            switch ($_GET['option']) {
                
                case 'users':
                    /*Si se envia  users en opcion se estara trabajando con usuarios*/

                         $smarty->assign('option','usuarios');
                 break; 

                case 'boards':
                    /*Si se envia  users en opcion se estara trabajando con usuarios*/
                        $smarty->assign('option','usuarios');
                
                break;


                case 'settings':
                    /*Congiruaciones del sitio */
                    $smarty->assign('option','configuraciones');
            
                break;
                    
                default:

                    $smarty->assign('option','usuarios');
                        
                break;

            } 


        
            $smarty->assign('titulo',"Back Coffe ".NAME_SITE);
            $smarty->assign('descripcion',NAME_SITE." Admin users and Contents");
            $smarty->assign('og_imagen',LOGOSITE);
            $smarty->assign('url_board',"$dominio");
            $smarty->assign('content_config','backoffice');         
            $smarty->assign('color','#e16565;padding:2px;');
            $smarty->display('../template/header.tpl');

        }else{

              header('location:index.php');

        }
    }

?>