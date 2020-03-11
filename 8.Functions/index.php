<?php 

  // Functions
  function sayHello($name = 'alireza'){
    echo "good morning $name";
  }

  sayHello('mario');
  function formatProduct($product){
    echo "{$product['name']}";
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP tutorial</title>
</head>
<body>
  <h1><?php echo "Hello ninjas"; ?></h1>
  
</body>
</html>