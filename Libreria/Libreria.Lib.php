<?php
    class Libreria
    {
        public $smarty;
        public function __construct()
        {
            $this->smarty= new Smarty();
        }

        public function CargaVista($carpeta, $vista)
        {
            $this->smarty->assign("Carpeta",$carpeta);
            $this->smarty->assign("Vista",$vista);
            $this->smarty->display("Default.tpl");
        }

        
    }
?>