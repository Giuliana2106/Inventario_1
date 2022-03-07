<?php
    Class Direcciones
    {
        public $smarty;
        public $admin;
        
        public function __construct()
        {
            $this->smarty=new Smarty();
            //$this->admin= new Admin();
        }

        public function Inventario()
        {
            $this->smarty->assign('nav', 'administrador');
            $this->smarty->assign('rol','Inventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function VerInventario()
        {
            $p=$this->admin->VerInventario($_SESSION['id_Usuario']);
            $array=array();
            while($row=mysqli_fetch_assoc($p))
            {
                array_push($array, $row);
            }
            $this->smarty->assign('administrador', $array);
            $this->smarty->assign('nav', 'administrador');
            $this->smarty->assign('rol','Verinventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

    }

?>