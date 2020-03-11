<?php 
  ////// indexed arrays
  $people = ["shaun", "Crystal", "Ryu"];
  echo $people[0];
  $people2 = array("salam", "goozo");
  echo $people2[1];
  $people[] = "alireza";
  print_r($people);
  array_push($people, "salam");
  echo count($people);
  $people3 = array_merge($people , $people2);
  print_r($people3);

  //// Associative arrays

  $ninjaOne = ['Ryu' => 'black'];
  echo $ninjaOne['Ryu'];
  print_r($ninjaOne);
  $ninjaTwo = array('Ghasem' => 23, 'Ali' => 26);
  echo $ninjaTwo['Ghasem'];

  //// multidimensional arrays:

  $blogs = [
    ['mario party', 'mario', 30],
    ['mario kart', 'toad', 25]
  ];

  $newBlogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
    ['title' => 'mario kart', 'author' => 'toad', 'content' => 'lorem']
  ];

  echo $newBlogs[1]['author'];

?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP tutorial</title>
</head>
<body>
  <h1><?php echo "Hello ninjas"; ?></h1>
  <p></p>
  <p></p>
  <p></p>
  
</body>
</html>