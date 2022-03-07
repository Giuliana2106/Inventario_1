<div align="center">
    <h1>Inicie Sesión</h1>
    </div>

    <div class="card-panel pink darken-3"></div>

    <div class="container">
    <form method="POST" action="?Controller=Usuario&Method=BuscarUsuario">
    <div class="row">
    <div class="input-field col s6">
      <input name="nombre" id="first_name2" type="text" class="validate">
      <label class="active" for="first_name2">Usuario</label>
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
</div>