<?php

  // Connecting to database using:
  // MySQLi or PDO (php data object)
  $conn = mysqli_connect('localhost', 'alireza', 'Alireza1372', 'design_pizza');
  if(!$conn){
    echo 'Connection error' . mysqli_connect_error();
  }

  //write query for all pizzas
  $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

  // make query & get result
  $result = mysqli_query($conn, $sql);
  
  // fetch the resulting rows as an array
  $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  // free the result
  mysqli_free_result($result);

  //close the connection
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>
<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
  
</div>

<?php include('footer.php') ?>

</html>