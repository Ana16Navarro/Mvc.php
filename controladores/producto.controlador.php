<?php

require_once "modelos/Producto.php";
require_once "modelos/Marca.php";
class ProductoControlador{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Producto();
    }

    public function MostrarTodo(){
        $marca = new Marca();
        $productos = $this ->modelo->TraerProductos();
        require "vistas/plantilla/encabezado.php";
        require "vistas/productos/listado.php";
        require "vistas/plantilla/pie.php";

    }

    public function Formulario(){
        $producto = null;
        if (isset($_GET['id']) && (int) $_GET['id'] > 0) {
            $producto = $this->modelo->TraerPorId((int) $_GET['id']);
        }
        $marca = new Marca();
        $marca = $marca->TraerMarcas();
        require "vistas/plantilla/encabezado.php";
        require "vistas/productos/formulario.php";
        require "vistas/plantilla/pie.php";
    }

    public function Guardar(){
        $ubicacion = "./assets/imagenes/productos/";
        
        if (isset($_FILES['imagen'])) {
            $archivo = $ubicacion.$_FILES['imagen']['name'];
            move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo);
        }
        if(isset($_POST['id']) && intval($_POST['id'])> 0) {
            $archivo = isset($archivo) ? $archivo : $_POST['imagen'] ?? "N/A";                
            $this->modelo->Actualizar($_POST, $archivo);
        }else{
            isset($archivo) ?? header("location:?c=producto&a=mostrartodo&error");
            $this->modelo->Insertar($_POST,  $archivo);
        }
        header("location:?c=producto&a=mostrartodo");
    }

    public function Borrar(){
        $id = $_GET ['id'];
        $this->modelo->Eliminar($id);
        header("location:?c=producto&a=mostrartodo");
    }


}