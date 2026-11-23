<?php
require "modelos/BasedeDatos.php";


if(!isset($_GET['c'])){
    require_once "controladores/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador, "Inicio"));
}else{
    $controlador = $_GET['c'];

    if(!file_exists('controladores/'.$controlador.'.controlador.php')){
        echo "No existe";
    }else{
        require_once "controladores/$controlador.controlador.php";
        $controlador = ucwords($controlador)."Controlador";
        $controlador = new $controlador; 
        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
        call_user_func(array($controlador, $accion));
    }
}