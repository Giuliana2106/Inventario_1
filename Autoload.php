<?php
    function Autoload($clase)
    {
        //echo "variable class: ".$clase."<br>";

        if(is_file("Controller/".$clase.".Controller.php"))
        {
            include "Controller/".$clase.".Controller.php";
        }

        if(is_file("Framework/Smarty/".$clase.".class.php"))
        {
            include "Framework/Smarty/".$clase.".class.php";
        }

        if(is_file("Libreria/".$clase.".Lib.php"))
        {
            include "Libreria/".$clase.".Lib.php";
        }

        if(is_file("Model/".$clase.".Model.php"))
        {
            include "Model/".$clase.".Model.php";
        }
    }

    spl_autoload_register('Autoload');

?>