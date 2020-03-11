<?php 

  // $price is localscope
  function muFun(){
    $price = 10;
  }
  function myFuncTwo($age){
    echo $age;
  }
  $name = "alireza";
  function sayHello(){
    //echo "helo $name"; (This is going to be error)
    global $name;
    echo "hello $name";
  }
  sayHello();

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