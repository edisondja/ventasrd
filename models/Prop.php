<?php



class Prop{


    public function titleList($title){

        $titulo_listo = str_replace(' ','_',$title);


        return $titulo_listo;
    }

    public function detectar_archivo($tipo){

		$tipo_archivo = $tipo;
		$tipo_arc = explode("/", $tipo_archivo);
		$tipo_arc = $tipo_arc[1];//aqui esta capturada la fuente en el segundo indice
		return $tipo_arc;
	}


    public function limitarTexto($texto, $limite = 15) {
        // Verifica si la longitud del texto es mayor que el límite
        if (mb_strlen($texto) > $limite) {
            // Corta el texto al límite especificado y añade '...' al final
            $textoCortado = mb_substr($texto, 0, $limite);
        } else {
            // Si el texto es menor o igual al límite, se devuelve el texto original
            $textoCortado = $texto;
        }
    
        return $textoCortado;
    }


    function __construct(){

    }

    public function disable(){

        return 'inactivo';
    }


    public function enable(){


        return 'activo';

    }


    public function banned(){

        return 'baneado';

    }


}














?>