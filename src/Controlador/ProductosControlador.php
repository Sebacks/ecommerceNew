<?php
require_once '../Modelo/Metodos/ProductoM.php';
require_once '../Modelo/Entidades/Producto.php';
require_once '../Modelo/Conexion.php';

class ProductosControlador
{
    function Principal()
    {
        $pM=new ProductoM();
        $cM=new CategoriaM();
        $todos = $pM->BuscarTodos();
        $todosCat = $cM->BuscarTodos();
        require_once '../Vista/productos/productos.php';
    }
    function Crear()
    {
        $p=new Producto();
        if($_POST['id']!=null){
            $p->setId($_POST['id']);
        }
        $p->setNombre($_POST['nombre']);
        $p->setDescripcion($_POST['descripcion']);
        $p->setUrlImagen($_POST['urlImagen']);
        $p->setPrecio($_POST['canDisponible']);
        $p->setFechaCreacion(date("d-m-Y"));
        $p->setEstado(true);
        $p->setIdLocalidad($_POST['idLocalidad']);
        $p->setDescuento($_POST['descuento']);
        $p->setHasDescuento($_POST['hasDescuento']);
        $pM = new ProductoM();
        $pM->Crear($p);
        $this->principal();
    }
    function Desactivar(){
        $p=new Producto();
        if($_POST['ID']!=null){
            $p->setID($_POST['ID']);
        }
        $pM = new ProductoM();
        $pM->Desactivar($p);
        $this->principal();
    }
    function Buscar()
    {
        $pM = new ProductoM();
        return $pM->Buscar($_POST["id"]);
    }
}