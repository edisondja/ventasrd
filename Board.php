<?php
#archivo logico preparado
	include'conexion.php';
	date_default_timezone_set('America/Santo_Domingo');
	$dominio = DOMAIN;


class Board {
	public Mysqli  $s; 

	public static function guardar_tablero($titulo,$description,$fecha_creacion,$imagen_tablero,$id_usuario){
       
		
			global $conexion; 
			$sql = "insert into tableros(titulo,descripcion,fecha_creacion,imagen_tablero,id_usuario)values(?,?,?,?,?)";
			$guardar = $conexion->prepare($sql);
			$guardar->bind_param('ssssi',$titulo,$description,$fecha_creacion,$imagen_tablero,$id_usuario);
			$guardar->execute() or die("no se puedo guardar el tablero");
	}

	public static function paginar_tableros($boards){

		global $conexion;


			 if($boards==1){
			     
			     $sql = "select * from tableros inner join user on tableros.id_usuario=user.id_user limit 0,10";
				 $data = $conexion->prepare($sql);
			
			 }else if($boards>1){

					$final = 10;
			 		$inicio =  ($boards * $final) - $final;
			 		$sql = "select * from tableros inner join user on tableros.id_usuario=user.id_user limit ?,?";
					$data = $conexion->prepare($sql);
					$data->bind_param('ii',$inicio,$final);

			 }
			 $data->execute();
			 $results = $data->get_result();
			 return  $results;


	}

	public static function cargar_tablero($id_tablero,$config='json'){

			global $conexion;
			$sql = "select * from tableros inner join user on tableros.id_usuario=user.id_user where id_tablero=?";
			$cargado = $conexion->prepare($sql);
			$cargado->bind_param('i',$id_tablero);
			$cargado->execute();
			$data = $cargado->get_result();
			$data = mysqli_fetch_object($data) or die("no se pudo cargar el tablero");
			
			if($config=='json'){

				echo json_encode($data);
				
			}else{

				return $data;

			}
			
	}

	public static function asignar_metadatos_a_multimedia($id_asignar,$texto,$precio,$metodo_de_pago){

		global $conexion;
		$sql = "update asingar_multimedia_t set texto=?,precio=?,metodo_de_pago=? where id_asignar=?";
		$acoplar = $conexion->prepare($sql);
		$acoplar->bind_param('sisi',$texto,$precio,$metodo_de_pago,$id_asignar);
		$acoplar->execute() or die('error');
		echo "update asset success";

	}

	public static function cargar_metadatos_de_multimedia($id_multimedia){

		global $conexion;

		$sql = "select * from asingar_multimedia_t where id_asignar=?";
		$cargar = $conexion->prepare($sql);
		$cargar->bind_param('i',$id_multimedia);
		$cargar->execute();
		$data = $cargar->get_result();
		$data = mysqli_fetch_object($data);

		echo json_encode($data);
 
	}

	public static function search_tablero($texto){

		global $conexion;

	    $texto = "%$texto%";


		$data= $conexion->prepare("select * from tableros inner join user on tableros.id_usuario=user.id_user where titulo like ? || descripcion like ? limit 20");
		$data->bind_param('ss',$texto,$texto);
		$data->execute();
		$resp = $data->get_result();
		$datos = [];
        foreach ($resp as $key) {

        	$datos[] = $key;
        }
        
		return $datos;

	}

	public static function cargar_tableros($id_usuario='general',$opcion='json'){

			global $conexion;
			
			if($id_usuario=='general'){
				
				$sql = "select * from tableros inner join user on user.id_user=tableros.id_usuario order by id_tablero desc limit 20";
				$cargado = $conexion->prepare($sql);

			}else{
					
				$sql = "select * from tableros inner join user on user.id_user=tableros.id_usuario where id_usuario=? order by id_tablero desc limit 20";
				$cargado = $conexion->prepare($sql);
				$cargado->bind_param('i',$id_usuario);		
			}
	
			$cargado->execute();
			$data = $cargado->get_result();
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
	public static function asignador_de_multimedia_tablero($id_tablero,$url_temp,$tipo_archivo,$titulo){

			global $conexion;
			$fecha = new DateTime();
			$fecha_a = $fecha->getTimestamp();
			$tipo_a = Video::detectar_archivo($tipo_archivo);
			$titulo_de_assets =Video::titlo_list($titulo);
			$guardar_como ="";
			//echo $tipo_a;
			if($tipo_a=='jpeg' || $tipo_a=='png'){
				
				$tipo_asset = 'imagen';

				$guardar_como = "imagenes_tablero/$fecha_a$titulo_de_assets.jpg";

		    	shell_exec("ffmpeg -i $url_temp $guardar_como");
		   		//move_uploaded_file($url_temp,$guardar_como);
		    	echo "<img src='$guardar_como' width='75'>";
		    	echo $url_temp;
		    	//echo "gurdando archivo";

		    }else if($tipo_a=='mp4' || $tipo_a=='webm' || $tipo_a=='avi'){
		    	
		    	$tipo_asset = 'video';
		    	$guardar_como = "videos/$fecha_a$titulo_de_assets.mp4";
		    	shell_exec("ffmpeg -i $url_temp $guardar_como");

		    }else{
		    	return "Lo sentimos este tipo de archivo no esta permitido";
		    } 
			$sql = "insert asingar_multimedia_t(id_tablero,ruta_multimedia,tipo_multimedia)values(?,?,?)";
			$guardar = $conexion->prepare($sql);
		    $guardar->bind_param('iss',$id_tablero,$guardar_como,$tipo_asset);
			$guardar->execute();

	}

	public function eliminar_multimedia_de_tablero($id_multimedia){
		global $conexion;
		$sql = "delete from asingar_multimedia_t where id_asignar=?";
		$eliminar = $conexion->prepare($sql);
		$eliminar->bind_param('i',$id_multimedia);
		$eliminar->execute();
	}

	public static function cargar_multimedias_de_tablero($id_tablero,$config='json'){
			global $conexion;
			$sql = "select * from asingar_multimedia_t where id_tablero=?";
			$cargar = $conexion->prepare($sql);
			$cargar->bind_param('i',$id_tablero);
			$cargar->execute();
			$data = $cargar->get_result();
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

	public static function actulizar_tablero($titulo,$descripcion,$imagen_tablero,$id_tablero){

			global $conexion;

			if($imagen_tablero!==""){

				$sql = "update tableros set titulo=?,descripcion=?,imagen_tablero=? where id_tablero=?";

				$actualizar = $conexion->prepare($sql);

			    $actualizar->bind_param('sssi',$titulo,$descripcion,$imagen_tablero,$id_tablero);
	   	    
	   	    }else{

	   	    	$sql = "update tableros set titulo=?,descripcion=? where id_tablero=?";

				$actualizar = $conexion->prepare($sql);

			    $actualizar->bind_param('ssi',$titulo,$descripcion,$id_tablero);

	   	    }
			$actualizar->execute() or die("error al actualizar tablero");
	}

	public static function eliminar_tablero($id_tablero){

			global $conexion; 
			$sql = "delete from tableros where id_tablero=?";
			$eliminar = $conexion->prepare($sql);
			$eliminar->bind_param('i',$id_tablero);
			$eliminar->execute();
	}









}


































?>