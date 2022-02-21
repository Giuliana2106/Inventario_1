<?php
    class Home
    {
        public $smarty;
        public $con;
        public function Inicio()
        {
            $this->smarty = new Smarty();
            $this->con = new Conexion();
            $this->smarty->assign('nombre', 'Inicio de Sesión');
            $this->smarty->assign('Carpeta', 'Usuario');
            $this->smarty->assign('Vista', 'Login');
            $this->smarty->display('Default.tpl');
        }

        
    }
?>