<!DOCTYPE html>
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

      {if $Carpeta != "Usuario" && $Vista != "Login"}
      {include file="Cabecera/Header.tpl"}
      {/if}

      {include file="$Carpeta/$Vista.tpl"}

      {include file="Cabecera/Footer.tpl"}
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="Framework/Materialize/js/materialize.min.js"></script>
    </body>
  </html>
        