<?php
    class User
    {
        public function BuscarUsuario($user, $pass)
        {
            $con = new Conexion();
            $consulta=$con->query("SELECT * FROM SELECT * FROM `usuario` WHERE `Usuario`='$user' AND `Pass`='$password'");
            $con->close();
            return $consulta;
        }
    }
?>