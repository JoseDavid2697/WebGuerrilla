<?php

    include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container-fluid">
<form action="?controlador=Guerrilla&accion=createGuerrilla" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Guerrilla name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="guerrillaName" name="guerrillaName" placeholder="Name">
    </div>
  </div>
  <div class="form-group col-sm-2">
    <label for="faction">Choose a faction</label>
    <select class="form-control" id="faction" name="faction">
      <option value="CHINA">CHINA</option>
      <option value="USMC">USMC</option>
      <option value="MEC">MEC</option>
    </select>
  </div>
  <div class="form-group" style="margin-left: 13px">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>

</form>

</div>
<br>
<br>
<br>


<?php

include_once 'public/footer.php';

?>