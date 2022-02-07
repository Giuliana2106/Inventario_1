<?php
    class Home
    {
        public function Inicio()
        {
            $smarty = new Smarty();
            $con = new Conexion();
        }

        $this->smarty->assign('nombre', 'Inicio de Sesión');
        $this->smarty->display('Login.tpl');
    }
?>