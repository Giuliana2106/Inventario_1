<?php
/* Smarty version 4.0.4, created on 2022-02-07 06:17:21
  from 'C:\xampp\htdocs\Inventario_1\View\Usuario\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6200ab6180f771_06652327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47524db917cd01e7d2dd6c51230da88f24aabd5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Usuario\\Login.tpl',
      1 => 1644210835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6200ab6180f771_06652327 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
    <h1>Inicie Sesión</h1>
    </div>

    <div class="card-panel pink darken-3"></div>

    <div class="container">
    <form method="POST" action="?class=user&method=login">
    <div class="row">
    <div class="input-field col s6">
      <input name="nombre" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Nombre</label>
    </div>

    <div class="input-field col s6">
      <input name="pass" id="first_name3" type="password" class="validate">
      <label class="active" for="first_name3">Contraseña</label>
    </div>
  </div>
  <div align="center">
  <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
  </button>
     </div>
    </form>
</div><?php }
}