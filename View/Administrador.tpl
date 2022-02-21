<div class="row">
  <div class="navbar-fixed">
    <nav>
      <nav class="cyan accent-4">
      <a href="" class="brand-logo">🍏Health Center </a>
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
    <h1>Administrador</h1>
    {if isset($rol)}
        {if $rol=='inventario'}
          {include file='Administrador/Inventario.tpl'}
          {else if $rol=='nuevorol'}
            {include file='Administrador/Rol.tpl'}
               {else if $rol=='verinventario'}
                  {include file='Administrador/VerInventario.tpl'} 
        {/if}
    {/if}
    </div>
</div>

</div>

<footer class="page-footer card  cyan accent-4  "><div class="card  cyan accent-4">
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