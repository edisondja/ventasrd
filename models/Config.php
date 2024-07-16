<?php

class Config extends EncryptToken
{
    public int $configuracion_id;
    public string $nombre_sitio;
    public string $descripcion_slogan;
    public string $descripcion_sitio;
    public string $favicon_url;
    public string $sitio_logo_url;
    public string $copyright_descripcion;
    public string $email_sitio;
    public string $busqueda_descripcion;
    public string $pagina_descripcion;
    public string $titulo_descripcion;
    public string $busqueda_hastag;

    public function __construct()
    {
        $this->SetConection();
        $this->sitio_logo_url = '';
        $this->favicon_url ='';

    }

    public function VerificarConfiguracion()
    {
        /*
            Este meotod se encarga de validar si ya
            existe una configuracion creada y retornar
            el id de ella
        */

        $sql = 'SELECT * FROM configuracion LIMIT 1';

        try{
            $cargar = $this->conection;
            $data = $cargar->query($sql);
            return $data->num_rows;
            
        }catch(Exception $e){

            echo $e;
        }
    }

    public function Cargar_configuracion($config)
    {
        $sql = 'select * from configuracion limit 1';
        $data = $this->conection->prepare($sql);
        $data->execute();
        $data = $data->get_result();
        $data = mysqli_fetch_object($data);
    
        // Verificar si la consulta no devolvió ningún resultado
        if ($data === null) {
            // Manejar el caso cuando no hay resultados
            if ($config == 'json') {
                echo json_encode(["error" => "No data found"]);
            } elseif ($config == 'asoc') {
                
                $config_d= new stdClass();
                $config_d->sitio_logo_url ='';
                $config_d->favicon_rul  ='';
                
                return $config_d;
            }
        } else {
            // Procesar el resultado como se espera
            if ($config == 'json') {
                echo json_encode($data);
            } elseif ($config == 'asoc') {
                return $data;
            }
        }
    }

    public function DetectarMultimedias($logo_sitio, $favicon_sitio)
    {
        $fecha_actual = date('ymdis');


        if (isset($logo_sitio['tmp_name'])) {

            $targetFile = "../assets/$fecha_actual";
            $targetFile .= $logo_sitio['name'];

            move_uploaded_file($logo_sitio['tmp_name'], $targetFile);

            $this->sitio_logo_url = str_replace('..', '', $targetFile);
        } else {

            echo 'asd'. $imagen_actual->sitio_logo_url;

            $imagen_actual =  $this->Cargar_configuracion('asoc');
            $this->sitio_logo_url = $imagen_actual->sitio_logo_url;
        }

        if (isset($favicon_sitio['tmp_name'])) {

            $targetFile = "../assets/$fecha_actual";
            $targetFile .= $logo_sitio['name'];

            move_uploaded_file($favicon_sitio['tmp_name'], $targetFile);

            $this->favicon_url = str_replace('..', '', $targetFile);

        } else {
            $imagen_actual =  $this->Cargar_configuracion('asoc');
            echo $imagen_actual->favicon_url;
            $this->favicon_url = $imagen_actual->favicon_url;
        }
    }

    public function Guardar_configuracion()
    {
        
        $sql = 'INSERT INTO configuracion(
                nombre_sitio,
                descripcion_slogan,
                descripcion_sitio,
                copyright_descripcion,
                email_sitio,
                busqueda_descripcion,
                pagina_descripcion,
                titulo_descripcion,
                busqueda_hastag,
                favicon_url,
                sitio_logo_url
            )VALUES(?,?,?,?,?,?,?,?,?,?,?)';

        $guardar = $this->conection->prepare($sql);

        try {
            $guardar->bind_param(
                'sssssssssss',
                $this->nombre_sitio,
                $this->descripcion_slogan,
                $this->descripcion_sitio,
                $this->copyright_descripcion,
                $this->email_sitio,
                $this->busqueda_descripcion,
                $this->pagina_descripcion,
                $this->titulo_descripcion,
                $this->busqueda_hastag,
                $this->favicon_url,
                $this->sitio_logo_url
            );
            $guardar->execute();
            $guardar->close();

            echo 'Configuracion guardada con exito!';
        } catch (Exception $e) {
            echo $e;
            $guardar->close();
        }
    }


    public function Actualizar_configuracion()
    {


    //    echo $this->favicon_url;
        $sql = "UPDATE configuracion SET
                    nombre_sitio = ?,
                    descripcion_slogan = ?,
                    descripcion_sitio = ?,
                    copyright_descripcion = ?,
                    email_sitio = ?,
                    busqueda_descripcion = ?,
                    pagina_descripcion = ?,
                    titulo_descripcion = ?,
                    busqueda_hastag = ?,
                    favicon_url = ?,
                    sitio_logo_url = ?";

        $actualizar = $this->conection->prepare($sql);

        try {


            $actualizar->bind_param(
                'sssssssssss',
                $this->nombre_sitio,
                $this->descripcion_slogan,
                $this->descripcion_sitio,
                $this->copyright_descripcion,
                $this->email_sitio,
                $this->busqueda_descripcion,
                $this->pagina_descripcion,
                $this->titulo_descripcion,
                $this->busqueda_hastag,
                $this->favicon_url,
                $this->sitio_logo_url
            );
            $actualizar->execute();
            $actualizar->close();

            echo 'Configuración actualizada con éxito!';
        } catch (Exception $e) {
            echo $e;
            $actualizar->close();
        }
    }   


}

?>

