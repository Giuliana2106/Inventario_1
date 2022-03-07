<?php
    class Inventario
    {
        public function IngresoInventario()
        {
            $invent = new Invent();
            $smarty = new Smarty();

            $producto = $_POST['produ'];
            $marca = $_POST['mrc'];
            $categoría = $_POST['categ'];
            $user = $_POST['idusuario'];
            $nombre = $_POST['nombre'];
            $desc = $_POST['descripción'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            
             

            $in=$invent->GuardarInventario($producto, $marca, $categoría, $user, $nombre, $desc, $cantidad, $precio, $fecha);
            $smarty->assign('nombre', 'Inventario');
            $smarty->display('Inventario.tpl');
        }
    } 
?>