<div align="center">
<h1>Registro de Inventario</h1>
</div>

<div class="card-panel pink darken-4"></div>

<div class="container">
{include file='Navs/BarraLateral.tpl'}
<div class="col s8">
 <form method="POST" action="?class=Inventario&method=IngresoInventario">
 <div class="row">
 <div class="input-field col s12">
   <input id="nombre" type="text" name="nombre">
   <label for="nombre">Nombre del Producto</label>
 </div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="descripción" type="text" name="descripción">
  <label for="descripción">Descripción del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="cantidad" type="number" name="cantidad">
  <label for="cantidad">Cantidad del Producto</label>
</div>
</div>

<div class="row">
<div class="input-field col s12">
  <input id="precio" type="number" name="precio"">
  <label for="precio">Precio del Producto</label>
</div>
</div>
<div class="row">
<div class="input-field col s12">
  <input id="fecha" type="date" name="fecha">
  <label for="fecha">Fecha de Registro</label>
</div>
</div>
    <div class="row">
        <div class="input-field col s8 center-align">
        <input class="waves-effect waves-light btn" type="submit" value="Guardar Producto">
        </div>
    </div>
</div>
</div>