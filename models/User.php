<?php


require('EncryptToken.php');

Class User extends EncryptToken{

    public int $id_user;
    public string $usuario;
    public string $sexo;
    public string $nombre;
    public string $apellido;
    public string $clave;
    public string $email;
    public string $bio;
    public string $foto_url;
    public $conection;

        function __construct(){

           $this->SetConection();

        }

        function RegistrerUser(){

            $type_user = 'pendiente';

            if($this->ExistUser($this->usuario)==true){

                $clave = md5($this->clave);
                $fecha = date('ymdis');
                $sql = "insert into user(usuario,clave,email,sexo,foto_url,fecha_creacion,nombre,apellido,bio)VALUES(?,?,?,?,?,?,?,?,?,?)";
                $ready = $this->conection->prepare($sql);
                $ready->bind_param('ssssssssss',
                $this->usuario,
                $clave,
                $this->email,
                $this->sexo,
                $this->foto_url,
                $fecha,
                $this->nombre,
                $this->apellido,
                $this->bio,
                $type_user
                );
                $ready->execute();
                $this->SendMailActivedAccount();
            
                echo "success";


            }else{

                echo "User no avaible";

            }
        
        } 

        function get_id_from_user($user,$config="asoc"){

            $sql = "select * from user where usuario=?";
			$cargado = $this->conection->prepare($sql);
            $cargado->bind_param('s',$user);
            $cargado->execute();
            $user = $cargado->get_result();
            if($config=='asoc'){

                $user = mysqli_fetch_object($user);

            }else{
                $user = mysqli_fetch_object($user);
                $user  = json_decode($user);
            }   
            return $user;
            
        }



        function get_info_user(){


           // $this->DecodeToken($jwt)
            $sql = "select * from user where id_user=?";
			$cargado = $this->conection->prepare($sql);
            $cargado->bind_param('i',$this->id_user);
            $cargado->execute();
            $user = $cargado->get_result();
            $user = mysqli_fetch_object($user);
            $user  = json_encode($user);
              
            echo $user;
            
        }

        public function updateUser() {
           

            $fecha = date('ymdis');
            $sql = "update user
            set
                usuario = ?,
                sexo = ?,
                foto_url = ?,
                fecha_creacion = ?,
                nombre = ?,
                apellido = ?,
                bio = ?
            where
                id_user = ?;";

            $ready = $this->conection->prepare($sql);
            $ready->bind_param('sssssssi',
            $this->usuario,
            $this->sexo,
            $this->foto_url,
            $fecha,
            $this->nombre,
            $this->apellido,
            $this->bio,
            $this->id_user
            );
            $ready->execute();



        }
        function LoadConfigPayUser(){


        }

       public function uploadImage($file, $targetDir = "../images/", $maxFileSize = 5 * 1024 * 1024, $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif']) {
            // Verificar si el archivo existe en la solicitud
          
            file_put_contents('logs/logs.txt','entro informacion realmente');

            if (!isset($file) || $file['error'] == UPLOAD_ERR_NO_FILE) {
                return $file["tmp_name"];
            }
        
            // Verificar si hay algún error en la subida
            if ($file['error'] != UPLOAD_ERR_OK) {
                return $file["tmp_name"];
            }
        
            // Verificar el tamaño del archivo
            if ($file["size"] > $maxFileSize) {
                return $file["tmp_name"];
            }
        
            // Verificar el tipo MIME del archivo
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($finfo, $file["tmp_name"]);
            finfo_close($finfo);
            if (!in_array($mimeType, $allowedMimeTypes)) {
                return $file["tmp_name"];
            }
        
            // Crear el directorio de subida si no existe
            if (!file_exists($targetDir)) {
                mkdir($targetDir, 0777, true);
            }
        
            // Generar un nombre único para el archivo
            $targetFile = $targetDir . uniqid() . '.' . pathinfo($file["name"], PATHINFO_EXTENSION);
        
            // Mover el archivo a la ubicación deseada
            if (move_uploaded_file($file["tmp_name"], $targetFile)) {
               // return "El archivo " . htmlspecialchars(basename($file["name"])) . " ha sido subido exitosamente.";
               
               file_put_contents('../logs/logs.txt','entro informacion realmente');
               return str_replace('..','',$targetFile); 

            } else {
                return $file["tmp_name"];
            }
        }
        
       
        

        public function Login($user,$clave)
        
        {

                
                session_start();    
                $clave = md5($clave);
                $sql = "select * from user where email=? or usuario=? and clave=?";
                $guardar = $this->conection->prepare($sql);
                $guardar->bind_param('sss',$user,$user,$clave);
                $guardar->execute();
                $data = $guardar->get_result();
                    
                if($data->num_rows>0){

                    $data = mysqli_fetch_object($data);
                    $_SESSION['nombre'] = $data->nombre;
                    $_SESSION['apellido'] = $data->apellido;
                    $_SESSION['sexo'] = $data->sexo;
                    $_SESSION['id_user'] = $data->id_user;
                    $_SESSION['usuario']= $data->usuario;
                    $_SESSION['foto_url'] = $data->foto_url;
                    
                    
                   $token=$this->EncryptUser($data->id_user,$data->usuario);

                    $user_user = [
                            'token'=>$token,
                            'usuario'=>$data->usuario,
                            'nombre'=>$data->nombre,
                            'apellido'=>$data->apellido,
                            'foto_url'=>$data->foto_url,
                            'id_user'=>$data->id_user
                    ];

                    echo json_encode($user_user);

                }else{

                    echo "user incorrect";

                }

        }


        public static function SigOut(){

            session_start(); 
            session_destroy();
            echo 'SigOut';

        }


        public function SendMailActivedAccount(){

                echo "verificando correo electronico";
                header("location:../index.php");
        }


        function LoadProfileUser($usuario){

          $SQL =  "select * from user where usuario=?";
          $DataUser =  $this->conection->prepare($SQL);
          $DataUser->bind_param('s',$usuario);
          $DataUser->execute();
          $user = $DataUser->get_result();
          $user = mysqli_fetch_object($user);

          return $user;

        }
    
        function ExistUser($usuario){

            
          $SQL =  "select * from user where usuario=?";
          $DataUser =  $this->conection->prepare($SQL);
          $DataUser->bind_param('s',$usuario);
          $DataUser->execute();
          $exist = $DataUser->get_result();
          
          if($exist->num_rows>0){

           return false;

          }else{

            return true;
          }



        }

        public function ActivarUsuario(){

            

        }

}



/*
$usuario = new User();
$usuario->getBearerToken();
$usuario->Login('edisondja','Meteoro2412');
$usuario->usuario = 'edisonxxx';
$usuario->nombre= 'Edison De Jesus';
$usuario->foto_url= 'Edison De Jesus';
$usuario->apellido= 'Edison De Jesus';
$usuario->clave = "concentro";
$token = $usuario->EncryptUser(1);
$usuario->VerifiyTokenExpired('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiZWRpc29uZGphIiwiaWRfdXNlciI6MSwiZXhwIjoxNjY2MzI1MjUxfQ.xV3UfYNvt5CvWvHc9k7KnD8k1_0uxFMGpi9HsgC86to');
//echo $token;
//$usuario->DecodeToken($token);
//$usuario->RegistrerUser();


*/



?>

