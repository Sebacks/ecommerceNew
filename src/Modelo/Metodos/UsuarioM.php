<?php

class UsuarioM
{
    function BuscarTodos()
    {
        $todos=array();
        $conexion= new Conexion();

        $sql="SELECT * FROM USUARIO";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e= new Usuario();
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setApellidos($fila["APELLIDOS"]);
                $e->setCedula($fila["CEDULA"]);
                $e->setCorreo($fila["CORREO"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setTwofa($fila["TWOFA"]);
                $e->setFechaCreacion($fila["FECHACREACION"]);
                $e->setIdTipo($fila["IDTIPO"]);
                $e->setIdCarrito($fila["IDCARRITO"]);
                $todos[]=$e;
            }
        }
        else
            $todos=null;

        $conexion->Cerrar();

        return $todos;
    }
    function Buscar($id)
    {
        $e=new Usuario();
        $conexion=new Conexion();

        $sql="SELECT * FROM USUARIO WHERE ID=$id";
        $resultado=$conexion->Ejecutar($sql);

        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc())
            {
                $e->setId($fila["ID"]);
                $e->setNombre($fila["NOMBRE"]);
                $e->setApellidos($fila["APELLIDOS"]);
                $e->setCedula($fila["CEDULA"]);
                $e->setCorreo($fila["CORREO"]);
                $e->setEstado($fila["ESTADO"]);
                $e->setTwofa($fila["TWOFA"]);
                $e->setFechaCreacion($fila["ESTADO"]);
                $e->setIdTipo($fila["IDTIPO"]);
                $e->setIdCarrito($fila["IDCARRITO"]);
            }
        }
        else
            $e=null;
        $conexion->Cerrar();
        return $e;
    }

    function Crear(Usuario $e)
    {
        $retVal=false;
        $conexion= new Conexion();
        $sql = "SELECT * FROM USUARIO WHERE CORREO= '".$e->getCorreo()."'";
        $resultado=$conexion->Ejecutar($sql);
        if(mysqli_num_rows($resultado)==0||mysqli_num_rows($resultado)<1||mysqli_num_rows($resultado)==null)
        {
            if ($e->getIdTipo()==null){
                $e->setIdTipo(1);
            }
            if($e->getId()==null){
                $sql="INSERT INTO USUARIO("
                    ." NOMBRE,"
                    ." APELLIDOS,"
                    ." CEDULA,"
                    ." CORREO,"
                    ." ESTADO,"
                    ." TWOFA,"
                    ." FECHACREACION,"
                    ." IDTIPO,"
                    ." IDCARRITO,)"
                    ." VALUES ("
                    ."'".$e->getNombre()."',"
                    ."'".$e->getApellidos()."',"
                    ."'".$e->getCedula()."',"
                    ."'".$e->getCorreo()."',"
                    ."'".$e->getEstado()."',"
                    ."'".$e->getTwofa()."',"
                    ."'".$e->getFechaCreacion()."',"
                    ."'".$e->getIdTipo()."',"
                    ."'".$e->getIdCarrito()."',";
            }
            else{
                $sql="UPDATE USUARIO SET NOMBRE='".$e->getNombre().
                    "', APELLIDOS='".$e->getApellidos().
                    "', CEDULA='".$e->getCedula().
                    "', CORREO='".$e->getCorreo().
                    "',ESTADO='".$e->getEstado().
                    "',TWOFA='".$e->getTwofa().
                    "',FECHACREACION='".$e->getFechaCreacion().
                    "',IDTIPO='".$e->getIdTipo().
                    "',IDCARRITO='".$e->getIdCarrito().
                    "' WHERE ID='".$e->getId()."'";
            }
            if($conexion->Ejecutar($sql))
                $retVal=true;
        }
        else
        {
            $retVal="mail_already_registered";
        }
        $conexion->Cerrar();
        return $retVal;
    }
    function IniciarSesion($correo, $pass)
    {
        $retVal=false;
        $conexion= new Conexion();
        $sql="SELECT ID FROM USUARIO WHERE CORREO='$correo'";
        $resultado=$conexion->Ejecutar($sql);
        if(mysqli_num_rows($resultado)>0)
        {
            while($fila=$resultado->fetch_assoc()){
                $id=$fila["ID"];
                $estado=$fila["ESTADO"];
            }
        }
        if($estado){
            $sql="SELECT PASS FROM CREDENCIALES WHERE IDUSUARIO='$id'";
            $passBD="";
            $resultado=$conexion->Ejecutar($sql);
            $resultado->bind_result($passBD);

            if(password_verify($pass, $passBD)){
                $retVal=true;
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $token = openssl_random_pseudo_bytes(50);
                $_SESSION['token'] = $token;
                $sql="UPDATE CREDENCIALES SET TOKEN='$token' WHERE IDUSUARIO='$id'";
            }
        }
        $conexion->Cerrar();
        return $retVal;
    }
    function Desactivar(Usuario $e)
    {
        $e->estado=0;
        $retVal=false;
        $conexion = new Conexion();
        $sql="UPDATE USUARIO SET ESTADO='".$e->estado."' WHERE ID='".$e->getId()."'";
        if($conexion->Ejecutar($sql))
            $retVal=true;
        $conexion->Cerrar();
        return $retVal;
    }
}