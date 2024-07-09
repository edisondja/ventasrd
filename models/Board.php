<?php

    Class Board extends EncryptToken{
        



        public int $board_id;
        public string $title;
        public string $description;
        public string $imagen_tablero;
        public string $id_usuario;
        public bool $portada_board = false;
        public User $CapturarUsuario;


        public $conection;
    
    

        function __construct(){ 

                $this->CapturarUsuario= new User();
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
            $estado = $this->enable();

            //inactivo es cuando no se pueden ver para los usuarios

			$this->conection; 

			$sql = "insert into tableros(descripcion,fecha_creacion,imagen_tablero,id_usuario,estado)values(?,?,?,?,?)";
			$guardar = $this->conection->prepare($sql);
			$guardar->bind_param('sssis',$this->description,$fecha,$this->imagen_tablero,$this->id_usuario,$estado);
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

        private function actualizar_estado_board($estado){

            /*Fragmento utilizado para cambiar los estados de los tableros */
            $sql = "update tableros set estado=? where id_usuario=? and id_tablero=?";
            $guardar  = $this->conection->prepare($sql);
            $guardar->bind_param('sii',$estado,$this->id_usuario,$this->board_id);
            $guardar->execute() or die("no se puedo guardar el tablero");
            $guardar->close();

        }


        public function desactivar_tablero(){

            $this->conection; 
            $this->actualizar_estado_board($this->disable());
            echo "tablero desactivado";
        }


        public function bloquear_tablero(){

            $this->CapturarUsuario->id_user = $this->id_usuario;


            $usaurio = $this->CapturarUsuario->get_info_user('asoc');
            
            if($usaurio->type_user=='admin'){

                /*
                    Si el usuario que esta intentando bloquear este tablero es admin se
                    esta accion de bloqueo sera iniciada
                */

                $this->conection; 
                $this->actualizar_estado_board($this->banned());
                echo "tablero bloqueado";

            }

           

        }


        public function activar_tablero(){
            $this->conection; 
            $this->actualizar_estado_board($this->enable());
            echo "tablero activado";

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



        public function cargar_solo_tablero($id_tablero) {
            // Asumimos que $this->conection es una instancia válida de mysqli
            $this->conection;
            $estado = $this->disable();
            $sql = "SELECT 
            t.descripcion,
            t.titulo,
            t.id_tablero,
            t.imagen_tablero,
            t.fecha_creacion,
            t.estado,
            u.usuario,
            u.foto_url
            FROM tableros as t INNER JOIN user as u
            ON t.id_usuario = u.id_user
            WHERE t.id_tablero = ? AND  t.estado <> ? 
            ";

            $cargar = $this->conection->prepare($sql);
            $cargar->bind_param('is',
                $id_tablero,
                $estado            
            );

            $cargar->execute();

            $data = $cargar->get_result();
        
            $data = mysqli_fetch_object($data);

            return $data;

        }

        

        public function cargar_tableros($id_tablero, $config = 'json') {
            // Asumimos que $this->conection es una instancia válida de mysqli
            $this->conection;
            $estado = $this->enable();
            $estado2 = $this->banned();
            $sql = "SELECT * FROM tableros INNER JOIN user
             ON tableros.id_usuario = user.id_user 
            WHERE id_tablero = ? AND  tableros.estado = ?
            OR tableros.estado=?
            ";
            $cargado = $this->conection->prepare($sql);
        
            if ($cargado === false) {
                // Manejo de errores de preparación
                die('Error en la preparación de la consulta: ' . $this->conection->error);
            }
        
            $cargado->bind_param('iss', $id_tablero, $estado,$estado2);
        
            if ($cargado->execute() === false) {
                // Manejo de errores de ejecución
                die('Error en la ejecución de la consulta: ' . $cargado->error);
            }
        
            $result = $cargado->get_result();
            if ($result === false) {
                // Manejo de errores de obtención de resultados
                die('Error al obtener el resultado: ' . $cargado->error);
            }
        
            $data = $result->fetch_object();
            $cargado->close();
        
            if ($config == 'json') {
                echo json_encode($data);
            } else {
                return $data;
            }
        }
        
    
      public function paginar_tableros($inicio){
        $estado = $this->enable();

        $limite = 8;

        if($inicio<=1){
            //si es igual menor a 1 el limite sera 8 y el inicio 1
            $fin = $limite;
            $inicio = 1;

        }else{
            $fin= ($inicio*$limite);
            $inicio = ($fin - $limite);
        }

            $sql = "select * from tableros where estado=? limit ?,?";
            $cargar = $this->conection->prepare($sql);
            $cargar->bind_param('sii',$estado,$inicio,$fin);
            $cargar->execute();
            $data = $cargar->get_result();
            return $data;

      }

      function search_tablero($texto, $config = 'asoc') {
        global $conexion;
        
            $estado = $this->enable();
            $texto = "%$texto%";
            
            // Prepara la consulta SQL

            if($config=='json'){
               

                $data = $this->conection->prepare("
                    SELECT t.descripcion,t.fecha_creacion,t.tipo_tablero,
                    t.imagen_tablero,u.foto_url,u.usuario,t.estado,t.id_tablero
                    FROM tableros as t
                    INNER JOIN user as u ON t.id_usuario = u.id_user 
                    WHERE t.titulo LIKE ? OR t.descripcion LIKE ?
                    LIMIT 20
                ");
                $data->bind_param('ss', $texto, $texto);
            }else{

                $data = $this->conection->prepare("
                    SELECT * FROM tableros as t
                    INNER JOIN user as u ON t.id_usuario = u.id_user 
                    WHERE (t.titulo LIKE ? OR t.descripcion LIKE ?) 
                    AND t.estado = ? 
                    LIMIT 20
                ");

                $data->bind_param('sss', $texto, $texto, $estado);


            }
            
            // Enlaza los parámetros a la consulta
            $data->execute();
            
            // Obtiene el resultado
            $resp = $data->get_result();
            $data->close();
            
            // Procesa el resultado
            $datos = [];
            while ($key = $resp->fetch_assoc()) {
                $datos[] = $key;
            }
            
            // Devuelve el resultado en el formato especificado
            if ($config !== 'json') {
                return $datos;
            } else {
                echo json_encode($datos);
            }
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
                    sleep(1);
                    if (!move_uploaded_file($url_temp, $guardar_como)) {
                        echo "Error al mover el archivo a $guardar_como";
                        return;
                    }
                
                }else if($tipo_a=='mp4' || $tipo_a=='webm' || $tipo_a=='avi'){   
                
                    $tipo_asset = 'video';
                    $guardar_como = "../videos/$fecha_a$titulo_de_assets.mp4";
                    sleep(1);
                    if (!move_uploaded_file($url_temp, $guardar_como)) {
                        echo "Error al mover el archivo a $guardar_como";
                        return;
                    }                
                }else{
                    echo"Lo sentimos este tipo de archivo no esta permitido";
                } 

                //$guardar_como = str_replace('../','',$guardar_como);

                $sql="insert into asignar_multimedia_t(id_tablero,
                ruta_multimedia,
                tipo_multimedia,
                estado)values(?,?,?,?)";
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
				
				$sql = "select * from tableros inner join user on 
                tableros.id_usuario=user.id_user 
                where tableros.estado=? order by id_tablero desc limit 20";
				$cargado = $this->conection->prepare($sql);
                $cargado->bind_param('s',$estatus);	

			}else{
					
				$sql = "select * from tableros  inner join user on tableros.id_usuario=user.id_user where id_usuario=? and tableros.estado=? order by id_tablero desc limit 20";
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
            $sql = "update asignar_multimedia_t set estado=? where id_asignar=?";
            $eliminar = $this->conection->prepare($sql);
            $eliminar->bind_param('si',$estado,$id_multimedia);
            $eliminar->execute();
            $eliminar->close();
        }
    
     function cargar_multimedias_de_tablero($id_tablero,$config='json'){
              
        $this->conection;
                $estado =$this->enable();
                $sql = "SELECT * FROM tableros AS t 
                INNER JOIN asignar_multimedia_t AS m
                ON t.id_tablero=m.id_tablero WHERE t.id_tablero=? 
                AND T.estado=?";
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