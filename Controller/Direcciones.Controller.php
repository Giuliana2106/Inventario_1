<?php
    Class Direcciones
    {
        public function VistaIngresarInvent()
        {
            $smarty = new Smarty();
            $smarty->assign('nombre', 'Inventario');
            $smarty->display('Inventario.tpl');
        }

        public function VistaVerInvent()
        {
            $smarty = new Smarty();
            $invent = new Invent();

            $in = $invent->VerInventario();
            $arr=array();

            while($row=mysqli_fetch_assoc($in))
            {
                array_push($arr,$row);
            }

            $smarty->assign('inventario', $arr);
            $smarty->assign('nombre', 'Ver Inventario');
            $smarty->display('VerInventario.tpl');
        }
    }
?>