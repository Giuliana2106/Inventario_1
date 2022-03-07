<?php
    class Usuario
    {
        public $lib;
        public $con;
        public $usuarios;
        public function __construct()
        {
            $this->usuarios=new User();
            $this->smarty=new Smarty();
            session_start();
        }

        public function BuscarUsuario()
        {
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];
            
            $u=$this->usuarios->BuscarUsuario($user,$pass);

            if($u->num_rows==1)
            {
                $arr=array();
                while ($fila=mysqli_fetch_assoc($u))
                {
                    array_push($arr,$fila);
                }
                $_SESSION['id_Usuario']=$arr[0]['idUsuario'];
                if ($arr[0]['Rol_idRol']==1)
                {
                    $this->smarty->assign('nav', 'Administrador');
                    $this->smarty->assign('title','Administrador');
                    $this->smarty->display('Administrador.tpl');
                }
                else if ($arr[0]['Rol_idRol']==2)
                {
                    $this->smarty->assign('nav', 'Trabajador');
                    $this->smarty->assign('title','Trabajador');
                    $this->smarty->display('Trabajador.tpl');
                }
            }
        }
    }
?>