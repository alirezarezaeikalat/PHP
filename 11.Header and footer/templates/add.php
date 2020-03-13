<?php

$errors = ['email' => '', 'pizza-title' => '', 'ingredients' => ''];
$email = $title = $ingredients = '';

if (isset($_POST['submit'])) {
  // check the email
  if (empty($_POST['email'])) {
    $errors['email'] = 'An email is required <br />';
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'email must be a valid email address';
    }
  }
  // check the title
  if (empty($_POST['pizza-title'])) {
    $errors['pizza-title'] = 'A title is required <br />';
  } else {
    $title = $_POST['pizza-title'];
    if (!preg_match('/^[a-zA-Z]+$/', $title)) {
      $errors['pizza-title'] = 'Title must be letters and spaces only';
    }
  }
  // check the ingredients
  if (empty($_POST['ingredients'])) {
    $errors['ingredients'] = 'At least one ingredient is required <br />';
  } else {
    $ingredients = $_POST['ingredients'];
    $regex = '/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/';
    if (!preg_match($regex, $ingredients)) {
      $errors['ingredients'] = 'Ingredients must be a comma seprated list';
    }
  }

  if(array_filter($errors)){
    //echo 'errors in the form';
  } else {
    //echo 'form is valid';
    header('Location: index.php');
  }

} // End of POST check
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

      <div class="col s12">
        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
      </div>

      <!--Pizza title-->

      <div class="col s12">
        <label for="pizza-title">Pizza Title:</label>
        <input type="text" name="pizza-title" id="pizza-title" value="<?php echo htmlspecialchars($title); ?>">
        <div class="red-text"><?php echo $errors['pizza-title']; ?></div>
      </div>

      <!--Ingredients-->

      <div class="col s12">
        <label for="ingredients">Ingredients (comma seprated):</label>
        <input type="text" id="ingredients" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
      </div>

      <div class="center col s12">
        <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
      </div>

    </form>
  </div>


</section>

<?php include('footer.php') ?>

</html>