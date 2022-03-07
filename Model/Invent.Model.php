<?php
    class Invent
    {
       public function GuardarInventario($idP,$idM,$idC,$idU,$n,$d,$p,$c)
       {
            $con = new Conexion();
            $consulta = $con->query("INSERT INTO `producto`(`idProducto`, `Marca_idMarca`, `Categoria_idCategoria`, `Usuario_idUsuario`, `Nombre`, `Descripción`, `Precio`, `Cantidad`) VALUES ('$idP','$idM','$idC','$idU','$n','$d','$p','$c');");
            $con->close();
            return $consulta;
       }

       public function VerInventario()
       {
           $con = new Conexion();
           $consulta = $con->query("SELECT * FROM `inventario`;");
           $con->close();
           return $consulta;
       }
    }
?>