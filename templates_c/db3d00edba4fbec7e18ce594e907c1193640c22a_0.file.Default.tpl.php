<?php
/* Smarty version 4.0.4, created on 2022-02-07 06:17:21
  from 'C:\xampp\htdocs\Inventario_1\View\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6200ab61576190_11060179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3d00edba4fbec7e18ce594e907c1193640c22a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Default.tpl',
      1 => 1644210869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_6200ab61576190_11060179 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

      <?php if ($_smarty_tpl->tpl_vars['Carpeta']->value != "Usuario" && $_smarty_tpl->tpl_vars['Vista']->value != "Login") {?>
      <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>

      <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['Carpeta']->value)."/".((string)$_smarty_tpl->tpl_vars['Vista']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

      <?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <!--JavaScript at end of body for optimized loading-->
      <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
    </body>
  </html>
        <?php }
}
