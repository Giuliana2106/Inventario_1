<?php
/* Smarty version 4.0.4, created on 2022-03-07 19:57:49
  from 'C:\xampp\htdocs\Inventario_1\View\Navs\Navad.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_622655ad1d2ec2_35945228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cb77b5a97aef5da56c901b3043a6e8b9c00199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Navs\\Navad.tpl',
      1 => 1646679455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622655ad1d2ec2_35945228 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s5">
    <nav class = "center-align pink accent-2">Opciones</nav>
<div class="collection">
    <?php $_prefixVariable1 = 'Administrador';
$_smarty_tpl->_assignInScope('nav', $_prefixVariable1);
if ($_prefixVariable1) {?>
        <a href="?Controller=Direcciones&Method=Inventario" class="collection-item"> Ingreso del Inventario</a>
        <a href="?Controller=Direcciones&Method=VerInventario" class="collection-item">Ver Inventario</a>
        <a href="?Controller=Home&Method=Inicio" class="collection-item">Salir</a>
    <?php }?>
 </div>   
</div><?php }
}
