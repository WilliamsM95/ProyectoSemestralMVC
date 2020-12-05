<?php
    require_once "modelo/Productos_modelos.php";
    
    $producto = new Productos_model();
    $array_productos=$producto->get_productos();
    
    require_once "vista/Productos_view.php";


?>