<?php

include_once 'public/header.php';

?>

<br>
<br>
<br>
<div class="container">

    <h4>Result</h4>
    <br>
    <!--Este mensaje debe ser cambiado de acuerdo al resultado del ataque-->
    <h5>You Win!</h5>

    <h6>You've attack to: <?php echo $vars ?></h6>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Oil</th>
        <th scope="col">Money</th>
        <th scope="col">People</th>
        </tr>
    </thead>
  <tbody>
    <tr>
      <td>+20</td>
      <td>+20</td>
      <td>+20</td>
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