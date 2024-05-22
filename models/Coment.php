<?php


Class Coment extends EncryptToken{




	public int $id_post;
	public int $id_user;
	public string $comentario;
	public string $tipo_post;
	public string $data_og;
	public  $conection;


	function __construct(){
		

		$this->SetConection();

	 }


         function leer_comentarios($id_post,$tipo_post='video'){
		
			
			if($tipo_post=='board'){
					
				$sql ="select * from comentario as c inner join user as u on  c.usuario_id=u.id_user  where c.id_tablero=? and c.tipo_post=? order by id_comentario desc ";
			
			}else{

				$sql ="select * from comentario as c inner join user as u on  c.usuario_id=u.id_user  where c.id_post=? and c.tipo_post=? order by id_comentario desc ";

			}
			

				$read = $this->conection->prepare($sql);
				$read->bind_param('is',$id_post,$tipo_post);
				$read->execute();
				$ejecutar = $read->get_result();
		
				
				foreach ($ejecutar as $key) {
					
						$data[] = $key;

				}

				echo json_encode($data);

		}


		public function guardar_comentario() {
			// Sanitizar el comentario
			$comentario = str_replace("script", "000", $this->comentario);
		
			// Obtener la fecha actual
			$fecha = date('Ymdhis');
		
			// Determinar la consulta SQL en función del tipo de post
			if ($this->tipo_post == 'board') {
				$sql = "INSERT INTO comentario (id_tablero, usuario_id, texto, fecha_publicacion, tipo_post, data_og) VALUES (?, ?, ?, ?, ?, ?)";
			} else {
				$sql = "INSERT INTO comentario (id_post, usuario_id, texto, fecha_publicacion, tipo_post, data_og) VALUES (?, ?, ?, ?, ?, ?)";
			}
		
			// Debug output
			echo "$this->id_post,$this->id_user,$comentario,$fecha,$this->tipo_post,$this->data_og";
		
			try {
				// Preparar la consulta
				$execute = $this->conection->prepare($sql);
				if ($execute === false) {
					throw new Exception("Error al preparar la consulta: " . $this->conection->error);
				}
		
				// Vincular los parámetros
				$bind = $execute->bind_param('iissss', $this->id_post, $this->id_user, $comentario, $fecha, $this->tipo_post, $this->data_og);
				if ($bind === false) {
					throw new Exception("Error al vincular los parámetros: " . $execute->error);
				}
		
				// Ejecutar la consulta
				$exec = $execute->execute();
				if ($exec === false) {
					throw new Exception("Error al ejecutar la consulta: " . $execute->error);
				}
		
				echo "Guardado con éxito";
			} catch (Exception $error) {
				echo "Error: " . $error->getMessage();
			} finally {
				// Cerrar el statement
				if (isset($execute) && $execute !== false) {
					$execute->close();
				}
			}
		}
		
        public function eliminar_comentario($id_comentario){
				
			$sql = "delete from comentario where id_comentario=?";
			$eliminar = $this->conection->prepare($sql);
			$eliminar->bind_param('i',$id_comentario);
			$eliminar->execute() or die('error delete coment');

			echo"success comment";


		}

		function reply_coment($id_coment,$id_user,$text_coment){


			$fecha = date('Ymdhis');
			$sql = "insert into reply_coment (coment_id,user_id,text_coment,fecha_creacion)VALUES(?,?,?,?)";
			$insertar = $this->conection->prepare($sql);	
			$insertar->bind_param('iiss',$id_coment,$id_user,$text_coment,$fecha);
			$insertar->execute() or die('error saving coment');

		}

		function load_childs_coment($id_coment){

			$sql = "select * from reply_coment where coment_id=?";
			$load = $this->conection->prepare($sql);	
			$load->bind_param('i',$id_coment);
			$load->execute();
			$data = $load->get_result();
			$coments_childs = [];

			foreach($data as $key){

				$data[] = $key;

			}

			echo json_encode($coments_childs);


		}


		function delete_coment_reply($id_coment){

			$sql = "delete from reply_coment where id_coment=?";
			$delete = $this->conection->prepare($sql);	
			$delete->bind_param('i',$id_coment);
			$delete->execute() or die('error deleting coment');

		}




}

/*
$guardar = new Coment();
$guardar->id_post = 1;
$guardar->id_user = 1;
$guardar->comentario = 'probando objeto de comentario';
$guardar->tipo_post = 'board';
$guardar->data_og ='';
*/