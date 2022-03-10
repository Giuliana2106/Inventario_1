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
        <div class="input-field col s12">
            <h1 class="center align">Ver Inventario</h1>
        </div>
    </div>

    <div class="row">
        {include file='Navs/Navad.tpl'}
        <div class="col s8">
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Marca</th>
                        <th>Categoría</th>
                        <th>Nombre del Producto</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$inventario item=$invent }
                        <tr>
                            <td>
                                {$invent['Producto']}
                            </td>
                            <td>
                                {$invent['Marca']}
                            </td>
                            <td>
                                {$invent['Categoría']}
                            </td>
                            <td>
                                {$invent['Nombre']}
                            </td>
                            <td>
                                {$invent['Descripción']}
                            </td>
                            <td>
                                {$invent['Cantidad']}
                            </td>
                            <td>
                                {$invent['Precio']}
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="Framework/Materialize/js/materialize.min.js"></script>
</body>

</html>