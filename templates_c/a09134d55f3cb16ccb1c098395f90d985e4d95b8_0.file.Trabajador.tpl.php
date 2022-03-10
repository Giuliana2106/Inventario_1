<?php
/* Smarty version 4.0.4, created on 2022-03-10 03:57:31
  from 'C:\xampp\htdocs\Inventario_1\View\Trabajador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6229691bc27093_88652805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a09134d55f3cb16ccb1c098395f90d985e4d95b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inventario_1\\View\\Trabajador.tpl',
      1 => 1646703052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Navs/Navtrb.tpl' => 1,
    'file:Trabajador/Inventario.tpl' => 1,
    'file:Trabajador/VerInventario.tpl' => 1,
  ),
),false)) {
function content_6229691bc27093_88652805 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="row">
        <div class="navbar-fixed">
            <nav>
                <nav class="pink darken-4">
                    <a href="" class="brand-logo">Inventarios Giulisa, S.A.</a>
                </nav>
            </nav>
        </div>
        <br></br>
        <div class="col s5">
            <?php $_smarty_tpl->_subTemplateRender("file:Navs/Navtrb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <div class="col 1">
        </div>

        <div class="col s5">
            <?php if ((isset($_smarty_tpl->tpl_vars['rol']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['rol']->value == 'Inventario') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Trabajador/Inventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['rol']->value == 'verinventario') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:Trabajador/VerInventario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php }?>
        </div>
    </div>

    </div>

    <footer class="page-footer card  pink accent-4 ">
        <div class="card pink darken-1">
            <div class="container  ">
                <div class="row ">
                    <div class="col l6 s12">
                        <h5 class="white-text  "></h5>
                        <p class="grey-text text-lighten-4"></p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text"></h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                            <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2022 Copyright Health Center
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                </div>
    </footer>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
