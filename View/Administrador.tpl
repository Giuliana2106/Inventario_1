<!DOCTYPE html>
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
                    <a href="" class="brand-logo">Inventarios Giulisa, S.A. </a>
                </nav>
            </nav>
        </div>
        <br></br>
        <div class="col s5">
            {include file="Navs/Navad.tpl"}
        </div>

        <div class="col 1">
        </div>

        <div class="col s5">
            {if isset($rol)}
                {if $rol=='Inventario'}
                    {include file='Administrador/Inventario.tpl'}
                {else if $rol=='verinventario'}
                    {include file='Administrador/VerInventario.tpl'}
                {/if}
            {/if}
        </div>
    </div>

    </div>

    <footer class="page-footer card  pink accent-4  ">
        <div class="card  pink darken-1">
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
                    © 2022 Copyright Inventarios
                    <a class="grey-text text-lighten-4 right" href="#!"></a>
                </div>
    </footer>
    </div>

    <script type="text/javascript" src="Framework/Materialize/js/materialize.min.js"></script>
</body>

</html>