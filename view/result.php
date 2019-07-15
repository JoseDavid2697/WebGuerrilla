<?php

include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container">
  <?php $guerrillas = $vars['guerrillas'] ?>
  <h5>Guerrilla name: <?php echo $guerrillas[0]['name'] ?></h5>


  <h5>Faction: <?php echo $guerrillas[0]['faction'] ?></h5>
  <h5>Rank: <?php echo $guerrillas[0]['rank'] ?></h5>
  <h5>TimesTamp: <?php echo $guerrillas[0]['timestamp'] ?></h5>
  <h5>Oil: <?php echo $guerrillas[0]['resources']['oil'] ?></h5>
  <h5>Money: <?php echo $guerrillas[0]['resources']['money'] ?></h5>
  <h5>People: <?php echo $guerrillas[0]['resources']['people'] ?></h5>
  <br>
  <h4>Army</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Assault</td>
        <td><?php echo $guerrillas[0]['army']['assault'] ?></td>
      </tr>
      <tr>
        <td>Engineer</td>
        <td><?php echo $guerrillas[0]['army']['engineer'] ?></td>
      </tr>
      <tr>
        <td>Tank</td>
        <td><?php echo $guerrillas[0]['army']['tank'] ?></td>
      </tr>
    </tbody>
  </table>

  <h4>Buildings</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>bunker</td>
        <td><?php echo $guerrillas[1]['buildings']['bunker'] ?></td>
      </tr>

    </tbody>
  </table>
  <br>
  <br>
  <h4>VS</h4>
  <br>
  <br>
  <h5>Guerrilla name: <?php echo $guerrillas[1]['name'] ?></h5>
  <h5>Faction: <?php echo $guerrillas[1]['faction'] ?></h5>
  <h5>Rank: <?php echo $guerrillas[1]['rank'] ?></h5>
  <h5>TimesTamp: <?php echo $guerrillas[1]['timestamp'] ?></h5>
  <h5>Oil: <?php echo $guerrillas[1]['resources']['oil'] ?></h5>
  <h5>Money: <?php echo $guerrillas[1]['resources']['money'] ?></h5>
  <h5>People: <?php echo $guerrillas[1]['resources']['people'] ?></h5>
  <br>
  <h4>Army</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Assault</td>
        <td><?php echo $guerrillas[1]['army']['assault'] ?></td>
      </tr>
      <tr>
        <td>Engineer</td>
        <td><?php echo $guerrillas[1]['army']['engineer'] ?></td>
      </tr>
      <tr>
        <td>Tank</td>
        <td><?php echo $guerrillas[1]['army']['tank'] ?></td>
      </tr>
    </tbody>
  </table>

  <h4>Buildings</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>bunker</td>
        <td><?php echo $guerrillas[1]['buildings']['bunker'] ?></td>
      </tr>

    </tbody>
  </table>




  <h3>Loot</h3>
  <?php $resources = $vars['resources'] ?>
  <h5>Winner: <?php echo $vars['name'] ?></h5>
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
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Assault</td>
        <td><?php echo $army['assault'] ?></td>
      </tr>
      <tr>
        <td>Engineer</td>
        <td><?php echo $army['engineer'] ?></td>
      </tr>
      <tr>
        <td>Tank</td>
        <td><?php echo $army['tank'] ?></td>
      </tr>
    </tbody>
  </table>

  <h4>Buildings</h4>

  <?php $buildings = $vars['buildings'] ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>bunker</td>
        <td><?php echo $buildings['bunker'] ?></td>
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