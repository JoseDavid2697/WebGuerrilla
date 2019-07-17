<?php

    include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container-fluid">
<form action="?controlador=Guerrilla&accion=cargarVistaMyProfile1" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre guerrilla</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre guerrilla">
    </div>
  </div>
  <div class="form-group" style="margin-left: 13px">
    <a class="btn btn-primary" href="?controlador=Guerrilla&accion=cargarVistaSignIn">Sign in</a>
  </div>
  <div class="form-group" style="margin-left: 13px">
    <button type="submit" class="btn btn-primary">Log in</button>
  </div>
</form>

</div>
<br>
<br>
<br>


<?php

include_once 'public/footer.php';

?>
