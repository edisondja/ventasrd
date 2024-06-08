<?php
require('bootstrap.php');

$Board = new Board();
$tableros = [];
$pagina = 0;

// Determinar la acción según los parámetros GET
if (!isset($_GET['boards']) && !isset($_GET['search'])) {

    $tableros = $Board->cargar_tablerosx('general', 'asoc');
    
} elseif (isset($_GET['boards'])) {
    $tableros = $Board->paginar_tableros($_GET['boards']);
    $pagina = $_GET['boards'];
    
} elseif (isset($_GET['search'])) {
    $tableros = $Board->search_tablero($_GET['search']);
} else {
    $tableros = $Board->cargar_tablerosx('general', 'asoc');

}

// Asignar variables a Smarty
$smarty->assign([
    'tableros' => $tableros,
    'pagina' => $pagina,
    'titulo' => "The best boards " . NAME_SITE,
    'descripcion' => NAME_SITE . " platform free for all to share your contents",
    'og_imagen' => LOGOSITE,
    'content_config' => 'boards',
    'url_board' => "$dominio/"
]);

$smarty->display('template/header.tpl');
?>
