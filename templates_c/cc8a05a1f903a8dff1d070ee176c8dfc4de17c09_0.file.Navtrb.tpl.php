<?php
/* Smarty version 4.0.4, created on 2022-02-28 20:29:08
  from 'C:\xampp\htdocs\Inventario_1\View\Navs\Navtrb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_621d2284f349b8_44560364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc8a05a1f903a8dff1d070ee176c8dfc4de17c09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Navs\\Navtrb.tpl',
      1 => 1646076543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d2284f349b8_44560364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align pink accent-2">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Trabajador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?Controller=Direcciones&Method=Inventario" class="collection-item"> Ingreso del Inventario</a>
        <a href="?Controller=Direcciones&Method=Verinventario" class="collection-item">Ver Inventario</a>
        <a href="?Controller=Home&Method=Inicio" class="collection-item">Salir</a>
    <?php }?>
    </div>   
   </div>
<?php }
}
