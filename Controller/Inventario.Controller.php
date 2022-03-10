<?php
    class Inventario
    {
        public function IngresoInventario()
        {
            $invent = new Invent();
            $smarty = new Smarty();
            session_start();

            $producto = $_POST['produ'];
            $marca = $_POST['mrc'];
            $categoría = $_POST['categ'];
            $user =$_SESSION['id_Usuario'];
            $nombre = $_POST['nombre'];
            $desc = $_POST['descripción'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            
             

            $in=$invent->GuardarInventario($producto, $marca, $categoría, $user, $nombre, $desc, $precio, $cantidad);
            $smarty->assign('nombre', 'Inventario');
            $smarty->display('Inventario.tpl');
        }
    } 
?>