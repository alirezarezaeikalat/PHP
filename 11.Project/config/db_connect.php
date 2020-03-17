<?php
  $conn = mysqli_connect('localhost', 'alireza', 'Alireza1372', 'design_pizza');
  if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
  }
?>