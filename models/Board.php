<?php

    Class Board extends EncryptToken{
        



        public int $board_id;
        public string $title;
        public string $description;
        public string $imagen_tablero;
        public string $id_usuario;
        public bool $portada_board = false;
 
        public $conection;
    
    

        function __construct(){

               $this->SetConection();
        }

        public function detectar_imagen_portada($portada,$id_tablero,$archivo_temp){

            echo " PORTADA LEIDA "||$portada;

            if($portada=='jpeg' || $portada=='png'){

                    if($this->portada_board==false){
                            /*la primera imagen que encuentre 
                                se le pondra de portada al 
                            */
                            $fecha = new DateTime();
                            $estado = $this->enable();
                            $fecha_a = $fecha->getTimestamp();
                            $guardar_c = "../imagenes_tablero/$fecha_a.jpg";
                            $this->asignar_portada_tablero($id_tablero,
                                                    $archivo_temp,$guardar_c);
                            $this->portada_board=true;
                    }       
            }

        }


        public function asignar_portada_tablero($id_tablero,$ruta_temp,$guardar_como){

                $sql = "update tableros set imagen_tablero=? where id_tablero=?";
                $guardar = $this->conection->prepare($sql);
                move_uploaded_file($ruta_temp,$guardar_como) or die('no se puedo guardar la portada');
                $ruta_portada = str_replace('..','',$guardar_como);
                $guardar->bind_param('si',$ruta_portada,$id_tablero);
                $guardar->execute();
        }

       

        public  function guardar_tablero(){


            $fecha = date('ymdis');
            $tipo_tablero = $this->enable();

            //inactivo es cuando no se pueden ver para los usuarios

			$this->conection; 

			$sql = "insert into tableros(descripcion,fecha_creacion,imagen_tablero,id_usuario,tipo_tablero)values(?,?,?,?,?)";
			$guardar = $this->conection->prepare($sql);
			$guardar->bind_param('sssis',$this->description,$fecha,$this->imagen_tablero,$this->id_usuario,$tipo_tablero);
			$guardar->execute() or die("no se puedo guardar el tablero");
            $last_id = $this->conection->insert_id;
            $guardar->close();

            if (isset($_FILES['media']['tmp_name'])) {

                $tipo_archivo='';

                //Verificar la primera imagen paraq usarla de portada
                // Verifica si es un array (múltiples archivos) o una cadena (un solo archivo)
                if (is_array($_FILES['media']['tmp_name'])) {
                    // Si es un array, cuenta el número de archivos
                    $archivos = count($_FILES['media']['tmp_name']);

                    for($i=0;$i<$archivos;$i++){

                        echo "asignando imagen$i";

                        $tipo_archivo =$this->detectar_archivo($_FILES['media']['type'][$i]);
                        $this->detectar_imagen_portada($tipo_archivo,$last_id,$_FILES['media']['tmp_name'][$i]);

                        $this->asignador_de_multimedia_tablero($last_id,
                            $_FILES['media']['tmp_name'][$i],
                            $_FILES['media']['type'][$i]
                            ,$this->limitarTexto($this->description));        
                    }
                } else {

                    echo 'asignando una sola imagen';
                    // Si es una cadena, hay un solo archivo
                    $tipo_archivo =$this->detectar_archivo($_FILES['media']['type']);
                    $this->detectar_imagen_portada($tipo_archivo,$last_id,$_FILES['media']['tmp_name']);                    $this->asignador_de_multimedia_tablero($last_id,
                    $_FILES['media']['tmp_name'],
                    $_FILES['media']['type']
                    ,$this->limitarTexto($this->description));   
                }
            }



	    }

        public function desactivar_tablero(){
            $this->conection; 
            $estado =$this->disable();
            $sql = "update tableros set tipo_tablero=? where id_usuario=? and id_tablero=?";
            $guardar  = $this->conection->prepare($sql);
            $guardar->bind_param('sii',$estado,$this->id_usuario,$this->board_id);
            $guardar->execute() or die("no se puedo guardar el tablero");
            $guardar->close();
        }

        public function actualizar_tablero($id_tablero) {
            $fecha = date('ymdis');
        
            try {
                $sql = "UPDATE tableros 
                        SET descripcion = ?, 
                            fecha_creacion = ?, 
                            imagen_tablero = ?, 
                            id_usuario = ? 
                        WHERE id_tablero = ?";
                $actualizar = $this->conection->prepare($sql);
                if ($actualizar === false) {
                    throw new Exception("Error al preparar la consulta: " . $this->conection->error);
                }
        
                // Bind the parameters to the SQL query
                $bind = $actualizar->bind_param('sssii', $this->description, $fecha, $this->imagen_tablero, $this->id_usuario, $id_tablero);
                if ($bind === false) {
                    throw new Exception("Error al vincular los parámetros: " . $actualizar->error);
                }
        
                // Execute the prepared statement
                $exec = $actualizar->execute();
                if ($exec === false) {
                    throw new Exception("Error al ejecutar la consulta: " . $actualizar->error);
                }
        
                // Close the statement
                $actualizar->close();
            } catch (Exception $e) {
                die("No se pudo actualizar el tablero: " . $e->getMessage());
            }
        }
        

        public  function cargar_tableros($id_tablero,$config='json'){

		    $this->conection;
            $estado = $this->enable();
			$sql = "select * from tableros inner join user on tableros.id_usuario=user.id_user where id_tablero=? and tipo_tablero=?";
			$cargado = $this->conection->prepare($sql);
			$cargado->bind_param('is',$id_tablero,$estado);
			$cargado->execute();
			$data = $cargado->get_result();
            $data = mysqli_fetch_object($data);
            $cargado->close();
			if($config=='json'){
				echo json_encode($data);
				
			}else{

				return $data;

			}
			
	    }
    
      public function paginar_tableros($inicio){

        $limite = 8;

        if($inicio<=1){
            //si es igual menor a 1 el limite sera 8 y el inicio 1
            $fin = $limite;
            $inicio = 1;

        }else{
            $fin= ($inicio*$limite);
            $inicio = ($fin - $limite);
        }

            $sql = "select * from tableros limit ?,?";
            $cargar = $this->conection->prepare($sql);
            $cargar->bind_param('ii',$inicio,$fin);
            $cargar->execute();
            $data = $cargar->get_result();
            return $data;

      }

      function search_tablero($texto){

            global $conexion;
        
            $tipo_tablero='activo';
            $texto = "%$texto%";
            
    
            $data= $this->conection->prepare("select * from tableros inner join
             user on tableros.id_usuario=user.id_user where titulo like ? || descripcion like ? and tipo_tablero=? limit 20");
            $data->bind_param('sss',$texto,$texto,$tipo_tablero);
            $data->execute();
            $resp = $data->get_result();
            $data->close();
            $datos = [];
            foreach ($resp as $key) {
    
                $datos[] = $key;
            }
            
            return $datos;
    
        }


        function asignar_metadatos_a_multimedia($id_asignar,$texto,$precio,$metodo_de_pago){
        
            $this->conection;
            $sql = "update asingar_multimedia_t set texto=?,precio=?,metodo_de_pago=? where id_asignar=?";
            $acoplar = $this->conection->prepare($sql);
            $acoplar->bind_param('sisi',$texto,$precio,$metodo_de_pago,$id_asignar);
            $acoplar->execute() or die('error');
            $acoplar->close();
            echo "update asset success";
    
        }

         function asignador_de_multimedia_tablero($id_tablero,$url_temp,$tipo_archivo,$titulo){
           $this->conection;
        
                $fecha = new DateTime();
                $estado = $this->enable();
                sleep(1);
                $fecha_a = $fecha->getTimestamp();
                $tipo_a = $this->detectar_archivo($tipo_archivo);
                $titulo_de_assets =$this->titleList($titulo);
                $guardar_como ="";
                //echo $tipo_a;
                if($tipo_a=='jpeg' || $tipo_a=='png'){

                    $tipo_asset = 'imagen';
                    $guardar_como = "../imagenes_tablero/$fecha_a$titulo_de_assets.jpg";
                    move_uploaded_file($url_temp,$guardar_como);
                
                }else if($tipo_a=='mp4' || $tipo_a=='webm' || $tipo_a=='avi'){   
                
                    $tipo_asset = 'video';
                    $guardar_como = "../videos/$fecha_a$titulo_de_assets.mp4";
                    move_uploaded_file($url_temp,$guardar_como);
                
                }else{
                    echo"Lo sentimos este tipo de archivo no esta permitido";
                } 

                //$guardar_como = str_replace('../','',$guardar_como);

                $sql="insert into asignar_multimedia_t(id_tablero,
                ruta_multimedia,
                tipo_multimedia,
                type_media)values(?,?,?,?)";
                //echo $id_tablero . ", " . $guardar_como . ", " . $tipo_asset . ", " . $estado;
                $guardar = $this->conection->prepare($sql);
                $guardar->bind_param('isss',$id_tablero,$guardar_como,$tipo_asset,$estado);
                $guardar->execute();
                $guardar->close();
                echo 'success asig';
                
		

	    }
    
       public  function cargar_tablerosx($id_usuario='general',$opcion='json'){

			$this->conection;
            $estatus = $this->enable();
			
			if($id_usuario=='general'){
				
				$sql = "select * from tableros inner join user on tableros.id_usuario=user.id_user where tableros.tipo_tablero=? order by id_tablero desc limit 20";
				$cargado = $this->conection->prepare($sql);
                $cargado->bind_param('s',$estatus);		
			}else{
					
				$sql = "select * from tableros  inner join user on tableros.id_usuario=user.id_user where id_usuario=? and tableros.tipo_tablero=? order by id_tablero desc limit 20";
				$cargado = $this->conection->prepare($sql);
				$cargado->bind_param('is',$id_usuario,$estatus);		
			}
	
			$cargado->execute();
			$data = $cargado->get_result();
            $cargado->close();
			$json=[];
			foreach ($data as $key) {

				$json[] = $key;
			}
			if($opcion=='json'){

				echo json_encode($json);

			}else{
				/* If the var opcion dont is equal to json return array associative */
				return 	$json;				
			}

	    }

      function eliminar_multimedia_de_tablero($id_multimediar){

            $estado =$this->disable();
            $this->conection;
            $sql = "update asignar_multimedia_t set type_media=? where id_asignar=?";
            $eliminar = $this->conection->prepare($sql);
            $eliminar->bind_param('si',$estado,$id_multimedia);
            $eliminar->execute();
            $eliminar->close();
        }
    
     function cargar_multimedias_de_tablero($id_tablero,$config='json'){
                $this->conection;
                $estado =$this->enable();
                $sql = "select * from asignar_multimedia_t where id_tablero=? and type_media=?";
                $cargar = $this->conection->prepare($sql);
                $cargar->bind_param('is',$id_tablero,$estado);
                $cargar->execute();
                $data = $cargar->get_result();
                $cargar->close();
                $datos = [];
                foreach ($data as $key) {
                    $datos[] = $key;
                }
                if($config=='json') {
    
                    echo json_encode($datos);

                }else{
    
                    return $datos;
    
                }	
        }








    }






?>