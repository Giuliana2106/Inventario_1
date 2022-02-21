<?php
/* Smarty version 4.0.4, created on 2022-02-21 19:40:40
  from 'C:\xampp\htdocs\Inventario_1\View\Administrador\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6213dca81c8dc6_45249352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '709dfdcd8a3cfb7dcd2fa3b49488ebd94f84e355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Administrador\\Inventario.tpl',
      1 => 1644986913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Navs/BarraLateral.tpl' => 1,
  ),
),false)) {
function content_6213dca81c8dc6_45249352 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
<h1>Registro de Inventario</h1>
</div>

<div class="card-panel pink darken-4"></div>

<div class="container">
<?php $_smarty_tpl->_subTemplateRender('file:Navs/BarraLateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col s8">
 <form method="POST" action="?class=Inventario&method=IngresoInventario">
 <div class="row">
 <div class="input-field col s12">
   <input id="nombre" type="text" name="nombre">
   <label for="nombre">Nombre del Producto</label>
 </div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="descripción" type="text" name="descripción">
  <label for="descripción">Descripción del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="cantidad" type="number" name="cantidad">
  <label for="cantidad">Cantidad del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="precio" type="number" name="precio"">
  <label for="precio">Precio del Producto</label>
</div>
</div>
<div class="row">
<div class="input-field col s12">
  <input id="fecha" type="date" name="fecha">
  <label for="fecha">Fecha de Registro</label>
</div>
</div>
    <div class="row">
        <div class="input-field col s8 center-align">
        <input class="waves-effect waves-light btn" type="submit" value="Guardar Producto">
        </div>
    </div>
</div>
</div><?php }
}
