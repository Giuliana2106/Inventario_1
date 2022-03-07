<?php
    class User
    {
        public function BuscarUsuario($user, $pass)
        {
            $con = new Conexion();
            $consulta=$con->query("SELECT * FROM `usuario` WHERE `Usuario`='$user' AND `Pass`='$pass'");
            $con->close();
            return $consulta;
        }
    }
?>