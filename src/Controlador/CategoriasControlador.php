<?php
    require_once 'Modelo/Metodos/CategoriaM.php';
    require_once 'Modelo/Entidades/Categoria.php';
    require_once 'Modelo/Conexion.php';



class CategoriasControlador
{
    function Index()
    {
        $cM=new CategoriaM();
        $todosCat = $cM->BuscarTodos();
        require_once 'Vistas/Dash/Categorias/index.php';
    }
    function Crear()
    {
        $c = new Categoria();
        if($_POST['id']!=null){
            $c->setId($_POST['id']);
        }
        $c->setNombre($_POST["nombre"]);
        $c->setDescripcion($_POST["descripcion"]);
        $c->setEstado(true);
        $cM = new CategoriaM();
        $cM->Crear($c);
        $this->Index();
    }
    function Activar(){
        $c=new Categoria();
        if($_POST['id']!=null){
            $c->setId($_POST['id']);
        }
        $c->setEstado($_POST['estado']);
        $cM = new CategoriaM();
        $cM->Activar($c);
        $this->Index();
    }
    function Buscar()
    {
        $pM = new ProductoM();
        return $pM->Buscar($_POST["id"]);
    }
    //($id,$nombre,$cantidadDisponible,$descripcion,$localidad,$urlImagen,$hasDescuento,$precio,$descuento
    function Prueba()
    {
        echo "<script>alert(':3') </script>";
        echo $_POST["descripcion"];
    }
}