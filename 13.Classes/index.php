<?php 
  class User {
    private $email;
    private $name;
    public function __construct($name, $email)
    {
      $this->email = $email;
      $this->name = $name;
    }
    public function login(){
      echo $this->name . ' logged in';
    }

    public function getName(){
      return $this->name;
    }
    public function setName($name){
      if(is_string($name) && strlen($name) > 1){
        $this->name = $name;
        return "name has been updated to $name";
      } else{
        return "not a valid name";
      }
    }
  }


  $user = new User('alireza', 'alireza.rezaeikalat@gmail.com');
  $user->login();
  echo '<br />';
  echo $user->getName();
?>



<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>
<body>
  
</body>
</html>