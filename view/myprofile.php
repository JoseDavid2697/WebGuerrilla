<?php

include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container">
  <h5>Nombre <?php echo $vars['name'] ?></h5>

  <h5>Faction: <?php echo $vars['faction'] ?></h5>
  <h5>Rank: <?php echo $vars['rank'] ?></h5>
  <h5>TimesTamp: <?php echo $vars['timestamp'] ?></h5>
  <br>
  <br>
<br>
  <?php $resources = $vars['resources'] ?>
  
  <h5>Oil: <?php echo $resources['oil'] ?></h5>
  <h5>Money: <?php echo $resources['money'] ?></h5>
  <h5>People: <?php echo $resources['people'] ?></h5>
  
  <br>

  <?php $army = $vars['army'] ?>


  <h4>Army</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">cantidad</th>
        <th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Assault</td>
        <td><?php echo $army['assault'] ?></td>
        <td><button type="button" class="btn btn-primary">+</td>
      </tr>
      <tr>
        <td>Engineer</td>
        <td><?php echo $army['engineer'] ?></td>
        <td><button type="button" class="btn btn-primary">+</td>
      </tr>
      <tr>
        <td>Tank</td>
        <td><?php echo $army['tank'] ?></td>
        <td><button type="button" class="btn btn-primary">+</td>
      </tr>
    </tbody>
  </table>

  <h4>Building</h4>

  <?php $buildings = $vars['buildings'] ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">cantidad</th>
        <th scope="col">Add</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>bunker</td>
        <td><?php echo $buildings['bunker'] ?></td>
        <td><button type="button" class="btn btn-primary">+</td>
      </tr>
      
    </tbody>
  </table>

</div>
<br>
<br>
<br>

<?php

include_once 'public/footer.php';

?>