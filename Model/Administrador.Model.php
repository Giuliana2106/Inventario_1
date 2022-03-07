<?php
     class Admins
     {
         public $con;
         public function __construct()
         {
             $this->con=new Conexion();
             session_start();
         }
 
         public function Registro()
         {
             $S=$_SESSION['id_Usuario'];
             $query="INSERT INTO `producto`(`idProducto`, `Marca_idMarca`, `Categoria_idCategoria`, `Usuario_idUsuario`, `Nombre`, `Descripción`, `Precio`, `Cantidad`) VALUES ('$idP','$idM','$idC','$idU','$n','$d','$p','$c';)";
             $resultado=$this->con->query($query);
             $this->con->close();
             return $resultado;
         }
 
         public function VerRegistro($id)
        {
            $query="SELECT * FROM `transacción` WHERE `Usuario_idUsuario`='$id';";
            $resultado=$this->con->query($query);
            $this->con->close();
            return $resultado;
        }
?>