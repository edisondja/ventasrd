<?php

  require('../config/config.php');
  require '../models/User.php';
  require '../models/Board.php';
  require '../models/Coment.php';
  require 'Core.php';

 

 //$_POST = json_decode(file_get_contents("php://input"),true);


  $action= $_POST['action'];


       switch($action){

        case 'save_post':
            
              $guardar = new Coment();
              $guardar->id_post = $_POST['id_board'];
              $guardar->id_user = $_POST['id_user'];
              $guardar->comentario= $_POST['text'];
              $guardar->tipo_post = $_POST['type_post']; 
              $guardar->data_og = $_POST['data_og'];
              $guardar->guardar_comentario();
         
            
        break;


        case 'create_board':
          

            $board = new Board();
            $board->description = $_POST['description'];
            $board->imagen_tablero= '';
            $board->id_usuario = $_POST['user_id'];
            $board->guardar_tablero();


        break;


        case 'update_board':
            
            $tablero = new Board();
            $tablero->description = $_POST['description'];
            $tablero->imagen_tablero = 'imagen_actualizada.jpg';
            $tablero->id_usuario = $_POST['user_id'];
            $id_tablero = $_POST['bord_id'];;
            $tablero->actualizar_tablero($id_tablero);

        break;


        case 'create_user':
            
            $usuario = new User();
            $usuario->usuario = $_POST['user'];
            $usuario->nombre=  $_POST['name'];
            $usuario->foto_url= 'assets/user_profile.png';
            $usuario->email = $_POST['email'];
            $usuario->apellido=  $_POST['last_name'];
            $usuario->bio =  $_POST['bio'];
            $usuario->clave =  $_POST['password'];
            $usuario->RegistrerUser();
    

        break;

        case 'user_info':   

            $usuario = new User();
            $usuario->id_user = (int) $_POST['user_id'];
            $usuario->get_info_user();    

        break;

        
        case 'update_coment':


        
        break;


        case 'delete_comment':

            $delete = new Coment();
            $delete->eliminar_comentario($_POST['id_comentario']);
           
        break;


        case 'load_comments':

            $id_board = $_POST['id_board'];
            $read_coment = new Coment();
            $read_coment->leer_comentarios($id_board,'board');

        break;


        case 'add_favorit':


        break;

            
        case 'reply_coment':

            $id_coment = $_POST['id_coment'];
            $id_user = $_POST['id_user'];
            $text_coment = $_POST['text_coment'];
            $reply_coment = new Coment();
            $reply_coment->reply_coment($id_coment,$id_user,$text_coment);

        break;


        case 'delete_reply_coment':

            $id_coment = $_POST['id_coment'];
            $reply_coment = new Coment();
            $reply_coment->delete_coment_reply($id_coment);

        break;


        case 'load_childs_coments':
            
            $id_coment = $_POST['id_coment'];
            $coments = new Coment();     
            $coments->load_childs_coment($id_coment);

        break;


        case 'point_to_board':


        break;

        

        case 'login':

            $usuario = new User();
            $usuario->Login($_POST['usuario'],$_POST['clave']);
            
      
        break;
        
        case 'sigout':

            User::SigOut();
      
        break;
        
        case 'get_metaog':
        
           // $usuario = new User();
           // $token =$usuario->VerifiyTokenExpired($usuario->getBearerToken());
            $url = $_POST['url'];
            Core::GetGrapth($url);

        break;
            
        
        case 'get_user_information':
            
            // $usuario = new User();
            // $token =$usuario->VerifiyTokenExpired($usuario->getBearerToken());
 
             $url = $_POST['url'];
             Core::GetGrapth($url);
 
            
 
         break;
            

      



       }

?>