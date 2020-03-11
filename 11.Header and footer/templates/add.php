<?php 
  if(isset($_POST['submit'])) {
    echo $_POST['email'];
    echo $_POST['pizza-title'];
    echo $_POST['ingredients'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php') ?>

<section class="container grey-text">
  <div class="row">
    <div class="col s12">
      <h4 class="center">Add a pizza</h4>
    </div>
  </div>
  <div class="row">
    <form action="add.php" class="white col s6 offset-s3 form" method="POST">
      <!--Email address-->  
      
        <div class="input-field col s12">
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email">
        </div>
      
      <!--Pizza title-->
      
        <div class="input-field col s12">
          <label for="pizza-title">Pizza Title:</label>
          <input type="text" name="pizza-title" id="pizza-title">
        </div>
      
      <!--Ingredients-->
      
        <div class="input-field col s12">
          <label for="ingredients">Ingredients (comma seprated):</label>
          <input type="text" id="ingredients" name="ingredients">
        </div>

        <div class="center col s12">
          <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>

    </form>
  </div>


</section>

<?php include('footer.php') ?>

</html>