<?php

include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Rank</th>
        <th scope="col">Company</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vars as $guerrilla) { ?>
        <tr>

          <td><?php echo $guerrilla['rank'] ?></td>
          <td><?php echo $guerrilla['name'] ?></td>
          <td><a class="btn btn-primary" href="?controlador=Guerrilla&accion=cargarVistaResult&inf=<?php echo $guerrilla['name'] ?>">Attack</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>



</div>
<br>
<br>
<br>



<?php

include_once 'public/footer.php';

?>