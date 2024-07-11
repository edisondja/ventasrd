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
    }

    public function VerificarConfiguracion()
    {
        /*
            Este meotod se encarga de validar si ya
            existe una configuracion creada y retornar
            el id de ella
            */

        $sql = 'SELECT * FROM configuracion 
                    ORDER BY id_config DESC LIMIT 1';

        $cargar = $this->conection();
        $data = $cargar->query($sql);

        if ($data->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function Cargar_configuracion()
    {
    }

    public function SubirLogo()
    {
        $sql = 'UPDATE configuracion SET 
            sitio_url_logo=? where cofiguracion_id=?
        ';

        try {
            $fecha_a = $fecha->getTimestamp();

            $guardar = $this->conection->prepare($sql);
            $guardar->bind_param(
                'si',
                $this->sitio_logo_url,
                $this->configuracion_id
            );

            $guardar->execute();
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function SubirFavicon()
    {
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
                busqueda_hastag
            )VALUES(?,?,?,?,?,?,?,?,?)';

        $guardar = $this->conection->prepare($sql);

        try {
            $guardar->bind_param(
                'sssssssss',
                $this->nombre_sitio,
                $this->descripcion_slogan,
                $this->descripcion_sitio,
                $this->copyright_descripcion,
                $this->email_sitio,
                $this->busqueda_descripcion,
                $this->pagina_descripcion,
                $this->titulo_descripcion,
                $this->busqueda_hastag
            );
            $guardar->execute();
            $guardar->close();

            echo 'Configuracion guardada con exito!';
        } catch (Exception $e) {
            echo $e;
            $guardar->close();
        }
    }
}

?>

