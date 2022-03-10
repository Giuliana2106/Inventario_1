<?php
/* Smarty version 4.0.4, created on 2022-03-07 20:41:42
  from 'C:\xampp\htdocs\Inventario_1\View\Administrador\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62265ff6d6ef12_99529777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '709dfdcd8a3cfb7dcd2fa3b49488ebd94f84e355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Administrador\\Inventario.tpl',
      1 => 1646682094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62265ff6d6ef12_99529777 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"
        media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div align="center">
        <h1>Registro de Inventario</h1>
    </div>

    <div class="card-panel pink darken-4"></div>

    <div class="container">
        <div class="col s8">
            <form method="POST" action="?Controller=Inventario&Method=IngresoInventario">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="producto" type="text" name="produ">
                        <label for="producto">Producto</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="marca" type="text" name="mrc">
                        <label for="marca">Marca</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="categoría" type="text" name="categ">
                        <label for="categoría">Categoría</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="nombre" type="text" name="nombre">
                        <label for="nombre">Nombre del Producto</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="descripción" type="text" name="descripción">
                        <label for="descripción">Descripción</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="precio" type="number" name="precio"">
                        <label for=" precio">Precio</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="cantidad" type="number" name="cantidad">
                        <label for="cantidad">Cantidad</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s8 center-align">
                        <input class="waves-effect waves-light btn" type="submit" value="Guardar Registro">
                    </div>
                </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
