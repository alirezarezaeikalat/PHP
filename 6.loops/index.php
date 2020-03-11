<?php 
  
// loops
  $ninjas = ['shaun', 'ryu', 'yoshi'];
  for($i = 0; $i < count($ninjas); $i++){
    echo $ninjas[$i];
    echo '<br />';
  }
  foreach($ninjas as $ninja){
    echo $ninja;
    echo '<br />';
  }
  $products = [
    ['name' => 'ghasem', 'price' => 20],
    ['name' => 'green hall', 'price' => 30]
  ];
  foreach($products as $product){
    echo $product['name'] . '-' . $product['price'];
    echo '<br />';
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
  <ul>
    <?php foreach ($products as $product){ ?>
        <h3><?php echo $product['name']; ?></h3>  
    <?php } ?>
  </ul>
  
</body>
</html>