<?php
    class Usuario
    {
        public $lib;
        public $con;
        public function __construct()
        {
            $this->lib=new Libreria();
            $this->con=new Conexion();
        }

        public function Inicio()
        {
            $c="Usuario";
            $v="Login";
            $this->lib->CargaVista($c, $v);
        }

        public function Fin()
        {
            echo "En usuario fin";
        }
    }
?>