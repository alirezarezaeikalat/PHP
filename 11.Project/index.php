<?php

  // Connecting to database using:
  // MySQLi or PDO (php data object)
  include('config/db_connect.php');

  //write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query & get result
  $result = mysqli_query($conn, $sql);
  if($result){
    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
  } else {
    echo 'query error' . mysqli_error($conn);
  }
  // free the result
  mysqli_free_result($result);

  //close the connection
  mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php') ?>
<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
  <div class="row">
    <?php foreach($pizzas as $pizza): ?>
      <div class="col s6 m4">
        <div class="card small z-depth-0">
          <img src="img/pizza.svg" alt="" class="pizza">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
            <ul>
              <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                <li><?php echo htmlspecialchars($ing); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="card-action right-align">
            <a href="detail.php?id=<?php echo $pizza['id'] ?>" class="brand-text">More info...</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include('templates/footer.php') ?>

</html>