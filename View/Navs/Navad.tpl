<div class="col s5">
    <nav class = "center-align pink accent-2">Opciones</nav>
<div class="collection">
    {if $nav='Administrador'}
        <a href="?Controller=Direcciones&Method=Inventario" class="collection-item"> Ingreso del Inventario</a>
        <a href="?Controller=Direcciones&Method=VerInventario" class="collection-item">Ver Inventario</a>
        <a href="?Controller=Home&Method=Inicio" class="collection-item">Salir</a>
    {/if}
 </div>   
</div>