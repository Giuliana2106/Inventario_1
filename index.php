<?php

include "Autoload.php";

if (isset($_GET['Controller']) && isset($_GET['Method']))
{
    $controller=$_GET['Controller'];
    $method=$_GET['Method'];
}
else
{
    $controller="Usuario";
    $method="Inicio";
}

 if(class_exists($controller) && method_exists($controller, $method))
 {
     $clase=new $controller();
     $clase->$method();
 }
 else
 {
     echo "clase o método no existe";
 }
?>