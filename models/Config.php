<?php

require('EncryptToken.php');

Class Config extends EncryptToken{


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



        function __construct(){

           $this->SetConection();

        }


        public function Cargar_configuracion(){

            


        }


        public function Guardar_configuracion(){

            $sql = "INSERT INTO configuracion(
                nombre_sitio,
                descripcion_slogan,
                descripcion_sitio,
                favicon_url,
                sitio_logo_url,
                copyright_descripcion,
                email_sitio,
                busqueda_descripcion,
                pagina_descripcion,
                titulo_descripcion,
                busqueda_hastag
            )VALUES(?,?,?,?,?,?,?,?,?,?,?)";


            $guardar=$this->conection->prepare($sql);

            $guardar->bind_param('sssssssssss',
            $this->$nombre_sitio
                

            );




        }


        private function VerificarConfiguracion(){




        }

    

}




?>

