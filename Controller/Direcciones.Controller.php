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
            //echo "hola";
            $this->smarty->assign('nav', 'administrador');
            $this->smarty->assign('rol','Inventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

        public function VerInventario()
        {
            $smarty = new Smarty ();
            $invent = new Invent ();

            $in = $invent->VerInventario();
            $arr=array();

            while($row=mysqli_fetch_assoc($in))
            {
                array_push($arr, $row);
            }

            $this->smarty->assign('administrador', $arr);
            $this->smarty->assign('nav', 'administrador');
            $this->smarty->assign('rol','Verinventario');
            $this->smarty->assign('title','Administrador');
            $this->smarty->display('Administrador.tpl');
        }

    }

?>